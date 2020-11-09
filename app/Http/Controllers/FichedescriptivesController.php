<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Fichedescriptive;
use Illuminate\Http\Request;

class FichedescriptivesController extends Controller
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
            $fichedescriptives = Fichedescriptive::latest()->paginate($perPage);
        } else {
            $fichedescriptives = Fichedescriptive::latest()->paginate($perPage);
        }

        return view('fichedescriptives.index', compact('fichedescriptives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('fichedescriptives.create');
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

        Fichedescriptive::create($requestData);

        return redirect('fiches')->with('flash_message', 'Fichedescriptive ajoutée!');
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
        $fichedescriptive = Fichedescriptive::findOrFail($id);

        return view('fichedescriptives.show', compact('fichedescriptive'));
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
        $fichedescriptive = Fichedescriptive::findOrFail($id);

        return view('fichedescriptives.edit', compact('fichedescriptive'));
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

        $fichedescriptive = Fichedescriptive::findOrFail($id);
        $fichedescriptive->update($requestData);

        return redirect('fiches')->with('flash_message', 'Fichedescriptive modfiée!');
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
        Fichedescriptive::destroy($id);

        return redirect('fiches')->with('flash_message', 'Fiche supprimée!');
    }
}

