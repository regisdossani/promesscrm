<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classe;
use App\Module;
use App\Formateur;
class ClassesController extends Controller
{
    public function index()
    {
        $classes = Classe::withCount('apprenants')->latest()->paginate(10);

        return view('classe.index', compact('classes'));
    }

    public function create()
    {


        $classes = Classes::lists('name', 'id');
        $formateurs = DB::table('formateurs')->lists('nom','prenom', 'id');
        $modules = DB::table('modules')->lists('nom', 'id');
        $apprenants = DB::table('apprenants')->lists('nom', 'prenom','id');

        return view('classe.create', compact(['classes', 'formateurs','modules','apprenants']));


    }
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:classes',
            'class_numeric'     => 'required|numeric',
            'formateur_id'        => 'required|numeric',
            'formation_id'        => 'required|numeric',
            'module_id'        => 'required|numeric',
            'class_description' => 'required|string|max:255'
        ]);



        $classe = new Classe(array(
            'name' => $request->get('name'),
            'class_numeric'     => $request->class_numeric,
            'class_description' => $request->class_description,
            'formation_id' => $request->formation_id
        ));
        $classe->formateurs()->associate(Formateur::find($request->get('formateur_id')));
        $classe->modules()->associate(Module::find($request->get('module_id')));
        $classe->apprenants()->associate(Apprenant::find($request->get('apprenant_id')));
        $classe->save();

        $classe->formateurs()->attach($request->input('formateur_id'));
        $classe->modules()->attach($request->input('module_id'));

        return redirect()->route('classes.index');
    }

    public function edit($id)
    {
        $formateurs = Formateur::list('nom','prenom', 'id');
        $modules = Module::list('nom', 'id');
        $formations = DB::table('formations')->lists('nom', 'id');
        $apprenants = DB::table('apprenants')->lists('nom','prenom', 'id');

        $classe = Classe::findOrFail($id);

        return view('classes.edit', compact('classe','formateurs','apprenants','modules','formations'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:classes,class_name,'.$id,
            'class_numeric'     => 'required|numeric',
            'formateur_id'        => 'required|numeric',
            'class_description' => 'required|string|max:255'
        ]);

        $class = Classe::findOrFail($id);

        $class->update([
            'name'        => $request->class_name,
            'class_numeric'     => $request->class_numeric,
            'formateur_id'        => $request->teacher_id,
            'class_description' => $request->class_description
        ]);

        return redirect()->route('classes.index');
    }

    public function destroy($id)
    {
        $class = Classe::findOrFail($id);

        $class->modules()->detach();
        $class->delete();

        return back();
    }

    public function assignModule($classid)
    {
        $module   = Module::latest()->get();
        $assigned   = Classe::with(['modules','apprenants'])->findOrFail($classid);

        return view('classes.assign-subject', compact('classid','module','assigned'));
    }

    public function storeAssignedModule(Request $request, $id)
    {
        $class = Classe::findOrFail($id);
        $class->modules()->sync($request->selectedmodules);

        return redirect()->route('classe.index');
    }
}
