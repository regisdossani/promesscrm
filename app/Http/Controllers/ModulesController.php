<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\Formateur;


class ModulesController extends Controller
{
    public function index()
    {
        $modules = Module::with('formateur')->latest()->paginate(10);
        return view('modules.index', compact('modules'));


    }
    public function create()
    {
        $modules = Module::with('formateur')->get();
        $teachers = Formateur::latest()->get();
        return view('modules.create', compact('teachers','modules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'          => 'required|string|max:255|unique:modules',
           /*  'module_code'  => 'required|numeric',
            'formateur_id'    => 'required|numeric',
            'description'   => 'required|string|max:255' */
        ]);

        Module::create([
            'nom'          => $request->nom,
            /* 'module_code'  => $request->subject_code,
            'formateur_id'    => $request->teacher_id,
            'description'   => $request->description */
        ]);

        return redirect()->route('modules.index');
    }
    
    public function show($id)
    {
        $module = Module::findOrFail($id);

        return view('modules.show', compact('module'));
    }

    public function edit($id)
    {
        $teachers = Formateur::latest()->get();

        return view('modules.edit', compact('subject','teachers'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nom'          => 'required|string|max:255|unique:modules,nom,'.$subject->id,
            // 'module'  => 'required|numeric',
            // 'formateur_id'    => 'required|numeric',
            // 'description'   => 'required|string|max:255'
        ]);

        $subject->update([
            'nom'          => $request->nom,
            // 'slug'          => str_slug($request->name),
        ]);

        return redirect()->route('modules.index');
    }

    public function destroy($id)
    {
        // $subject->delete();
        Module::destroy($id);

        return back();
    }


}
