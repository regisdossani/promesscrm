<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classe;
use App\Module;
use App\Formateur;
use App\Formation;
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
        $formations = Formation::latest()->get();

        return view('classe.create', compact('teachers','formations'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:classes',
            'class_numeric'     => 'required|numeric',
            'formation_id'        => 'required|numeric',
            'class_description' => 'required|string|max:255'
        ]);

        Classe::create([
            'name'        => $request->name,
            'class_numeric'     => $request->class_numeric,
            'formation_id'        => $request->formation_id,
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
        $formations = Formation::latest()->get();
        $classe = Classe::findOrFail($id);

        return view('classe.edit', compact('classe','teachers','formations'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:classes,name,'.$id,
            'class_numeric'     => 'required|numeric',
            'formation_id'        => 'required|numeric',
            'class_description' => 'required|string|max:255'
        ]);

        $class = Classe::findOrFail($id);

        $class->update([
            'name'        => $request->name,
            'class_numeric'     => $request->class_numeric,
            'formation_id'        => $request->formation_id,
            'class_description' => $request->class_description
        ]);

        return redirect()->route('classe.index');
    }

    public function destroy($id)
    {
        $class = Classe::findOrFail($id);

        $class->modules()->detach();
        $class->delete();

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
