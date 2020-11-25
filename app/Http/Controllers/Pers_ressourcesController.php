<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Pers_ressource;
use Illuminate\Http\Request;

class Pers_ressourcesController extends Controller
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
            $pers_ressources = Pers_ressource::latest()->paginate($perPage);
        } else {
            $pers_ressources = Pers_ressource::latest()->paginate($perPage);
        }

        return view('pers_ressources.index', compact('pers_ressources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        return view('pers_ressources.create');
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
        if ($request->hasFile('piece_jointe')) {
            checkDirectory("pers_ressources");
            $requestData['piece_jointe'] = uploadFile($request, 'piece_jointe', public_path('uploads/pers_ressources'));
        }
        Pers_ressource::create($requestData);

        return redirect('pers_ressources')->with('flash_message', 'Persressource added!');
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
        $pers_ressource = Pers_ressource::findOrFail($id);

        return view('pers_ressources.show', compact('pers_ressource'));
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
        $pers_ressource = Pers_ressource::findOrFail($id);

        return view('pers_ressources.edit', compact('pers_ressource'));
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

        $pers_ressource = Pers_ressource::findOrFail($id);
        $pers_ressource->update($requestData);

        return redirect('pers_ressources')->with('flash_message', 'Persressource updated!');
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
        Pers_ressource::destroy($id);

        return redirect('pers_ressources')->with('flash_message', 'Persressource deleted!');
    }
}
