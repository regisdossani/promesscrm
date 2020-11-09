<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\Formateur;


class ModulesController extends Controller
{
    public function index()
    {
        $subjects = Module::with('formateur')->latest()->paginate(10);
        return view('modules.index', compact('subjects'));


    }
    public function create()
    {
        $teachers = Formateur::latest()->get();
        return view('modules.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'          => 'required|string|max:255|unique:modules',
            'module_code'  => 'required|numeric',
            'formateur_id'    => 'required|numeric',
            'description'   => 'required|string|max:255'
        ]);

        Module::create([
            'nom'          => $request->name,
            'module_code'  => $request->subject_code,
            'formateur_id'    => $request->teacher_id,
            'description'   => $request->description
        ]);

        return redirect()->route('modules.index');
    }

    public function edit(Module $subject)
    {
        $teachers = Formateur::latest()->get();

        return view('modules.edit', compact('subject','teachers'));
    }


    public function update(Request $request, Module $subject)
    {
        $request->validate([
            'nom'          => 'required|string|max:255|unique:modules,nom,'.$subject->id,
            'module'  => 'required|numeric',
            'formateur_id'    => 'required|numeric',
            'description'   => 'required|string|max:255'
        ]);

        $subject->update([
            'nom'          => $request->name,
            // 'slug'          => str_slug($request->name),
            'module_code'  => $request->subject_code,
            'formateur_id'    => $request->teacher_id,
            'description'   => $request->description
        ]);

        return redirect()->route('modules.index');
    }

    public function destroy(Module $subject)
    {
        $subject->delete();

        return back();
    }


}
