<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Formateur;
use App\Encadreur;
use Illuminate\Http\Request;

class EncadreursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $encadreur = Encadreur::latest()->paginate($perPage);
        } else {
            $encadreurs = Encadreur::latest()->paginate($perPage);
        }

        return view('encadreurs.index', compact('encadreurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $encadreurs=Encadreur::all();
        $teachers=Formateur::all();

        return view('encadreurs.create',compact('encadreurs','teachers'));
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

        Encadreur::create($requestData);

        return redirect('encadreurs')->with('flash_message', 'Encadreur added!');
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
        $encadreur = Encadreur::findOrFail($id);

        return view('encadreurs.show', compact('encadreur'));
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
        $encadreur = Encadreur::findOrFail($id);
        $teachers=Formateur::all();

        return view('encadreurs.edit', compact('encadreur','teachers'));
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

        $encadreur = Encadreur::findOrFail($id);
        $encadreur->update($requestData);

        return redirect('encadreurs')->with('flash_message', 'Encadreur updated!');
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
        Encadreur::destroy($id);

        return redirect('encadreurs')->with('flash_message', 'Encadreur deleted!');
    }
}
