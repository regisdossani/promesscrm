<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Stagiaire;
use Illuminate\Http\Request;

class StagiairesController extends Controller
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
            $stagiaires = Stagiaire::latest()->paginate($perPage);
        } else {
            $stagiaires = Stagiaire::latest()->paginate($perPage);
        }

        return view('stagiaires.index', compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('stagiaires.create');
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

        Stagiaire::create($requestData);

        return redirect('stagiaires')->with('flash_message', 'Stagiaire added!');
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
        $stagiaire = Stagiaire::findOrFail($id);

        return view('stagiaires.show', compact('stagiaire'));
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
        $stagiaire = Stagiaire::findOrFail($id);

        return view('stagiaires.edit', compact('stagiaire'));
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

        $stagiaire = Stagiaire::findOrFail($id);
        $stagiaire->update($requestData);

        return redirect('stagiaires')->with('flash_message', 'Stagiaire updated!');
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
        Stagiaire::destroy($id);

        return redirect('stagiaires')->with('flash_message', 'Stagiaire deleted!');
    }
}
