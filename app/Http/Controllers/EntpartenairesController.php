<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Entpartenaire;

class EntpartenairesController extends Controller
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
            $entpartenaires = Entpartenaire::latest()->paginate($perPage);
        } else {
            $entpartenaires = Entpartenaire::latest()->paginate($perPage);
        }

        return view('entpartenaires.index', compact('entpartenaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('entpartenaires.create');
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
        $this->validate($request,[
            'reference' => ['required', 'string', 'reference', 'max:255', 'unique:entpartenaires'],

            ]);
        $requestData = $request->all();

        Entpartenaire::create($requestData);

        return redirect('entpartenaires')->with('flash_message', 'Entpartenaire added!');
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
        $entpartenaire = Entpartenaire::findOrFail($id);

        return view('entpartenaires.show', compact('entpartenaire'));
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
        $entpartenaire = Entpartenaire::findOrFail($id);

        return view('entpartenaires.edit', compact('entpartenaire'));
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

        $entpartenaire = Entpartenaire::findOrFail($id);
        $entpartenaire->update($requestData);

        return redirect('entpartenaires')->with('flash_message', 'Entpartenaire updated!');
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
        Entpartenaire::destroy($id);

        return redirect('entpartenaires')->with('flash_message', 'Entpartenaire deleted!');
    }
}
