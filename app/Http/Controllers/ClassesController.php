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
        $teachers = Formateur::latest()->get();

        return view('classe.create', compact('teachers'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:classes',
            'class_numeric'     => 'required|numeric',
            'formateur_id'        => 'required|numeric',
            'class_description' => 'required|string|max:255'
        ]);

        Classe::create([
            'name'        => $request->class_name,
            'class_numeric'     => $request->class_numeric,
            'formateur_id'        => $request->teacher_id,
            'class_description' => $request->class_description
        ]);

        return redirect()->route('classes.index');
    }

    public function edit($id)
    {
        $teachers = Formateur::latest()->get();
        $class = Classe::findOrFail($id);

        return view('classes.edit', compact('class','teachers'));
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
