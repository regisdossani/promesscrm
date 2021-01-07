<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Classe;
use App\Formateur;

use App\Teacherattendance;
use Illuminate\Http\Request;

class TeacherattendancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $attendances = Teacherattendance::latest()->paginate($perPage);
        } else {
            $attendances = Teacherattendance::latest()->paginate($perPage);
        }

        return view('teacherattendances.index', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $classes=Classe::all();
        $formateurs=Formateur::all();
        return view('teacherattendances.create',compact('classes','formateurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        Teacherattendance::create($requestData);

        return redirect('teacherattendances')->with('flash_message', 'Teacherattendance added!');
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
        $teacherattendance = Teacherattendance::findOrFail($id);

        return view('teacherattendances.show', compact('attendance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $classes=Classe::all();
        $formateurs=Formateur::all();
        $attendance = Teacherattendance::findOrFail($id);

        return view('teacherattendances.edit', compact('attendance','classes','formateurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $teacherattendance = Teacherattendance::findOrFail($id);
        $teacherattendance->update($requestData);

        return redirect('teacherattendances')->with('flash_message', 'Teacherattendance updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Teacherattendance::destroy($id);

        return redirect('teacherattendances')->with('flash_message', 'Teacherattendance deleted!');
    }
}
