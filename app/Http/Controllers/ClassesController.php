<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classe;
use App\Module;
use App\Formateur;
use App\Filiere;
class ClassesController extends Controller
{
    public function index()
    {
        $classes = Classe::withCount('apprenants')->latest()->paginate(10);

        return view('classe.index', compact('classes'));
    }

    public function create()
    {


        $teachers = Formateur::latest()->get();
        $filieres = Filiere::latest()->get();

        return view('classe.create', compact('teachers','filieres'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:classes',
            'filiere_id'        => 'required|numeric',
            'class_description' => 'required|string|max:255'
        ]);

        Classe::create([
            'name'        => $request->name,
            'filiere_id'        => $request->filiere_id,
            'class_description' => $request->class_description
        ]);

        return redirect()->route('classe.index');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $classe = Classe::findOrFail($id);

        return view('classe.show', compact('classe'));
    }

    public function edit($id)
    {
        $teachers = Formateur::latest()->get();
        $filieres = Filiere::latest()->get();
        $classe = Classe::findOrFail($id);

        return view('classe.edit', compact('classe','teachers','filieres'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:classes,name,'.$id,
            'filiere_id'        => 'required|numeric',
            'class_description' => 'required|string|max:255'
        ]);

        $class = Classe::findOrFail($id);

        $class->update([
            'name'        => $request->name,
            'filiere_id'        => $request->formation_id,
            'class_description' => $request->class_description
        ]);

        return redirect()->route('classe.index');
    }

    public function destroy($id)
    {
        $classe = Classe::findOrFail($id);

        $classe->modules()->detach();
        $classe->delete();

        //return back();
        return redirect()->route('classe.index');
    }

    public function assignSubject($classid)
    {
        $subjects   = Module::latest()->get();
        $assigned   = Classe::with(['modules','apprenants'])->findOrFail($classid);

        return view('classes.assign-subject', compact('classid','subjects','assigned'));
    }

    public function storeAssignedSubject(Request $request, $id)
    {
        $class = Classe::findOrFail($id);
        $class->modules()->sync($request->selectedsubjects);

        return redirect()->route('classe.index');
    }
}
