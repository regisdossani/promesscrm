<?php

namespace App\Http\Controllers;

use App\Equipe;
use App\Eqattendance;
use Illuminate\Http\Request;
use App\Http\Helpers\AppHelper;


class EqattendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $equipes=Equipe::all();

        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $eqattendances = Eqattendance::latest()->paginate($perPage);
        } else {
            $eqattendances = Eqattendance::latest()->paginate($perPage);
        }
        return view('eqattendances.index', compact('eqattendances','equipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $equipes=Equipe::all();

        return view('eqattendances.create',compact('equipes'));
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

        Eqattendance::create($requestData);

        return redirect('eqattendance')->with('flash_message', 'Attendance added!');
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
        $equipes=Equipe::all();
        $eqattendance = Eqattendance::findOrFail($id);

        return view('eqattendances.show', compact('eqattendance','equipes'));
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
        $equipes=Equipe::all();

        $eqattendance = Eqattendance::findOrFail($id);

        return view('eqattendances.edit', compact('equipes','eqattendance'));
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

        $eqattendance = Eqattendance::findOrFail($id);
        $eqattendance->update($requestData);

        return redirect('eqattendance')->with('flash_message', 'Attendance updated!');
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
        Eqattendance::destroy($id);

        return redirect('eqattendance')->with('flash_message', 'Attendance deleted!');
    }
}