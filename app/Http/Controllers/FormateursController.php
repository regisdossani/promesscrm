<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Formateur;
use Illuminate\Http\Request;

class FormateursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    function __construct()
    {
         $this->middleware('auth');

    }


    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $formateurs = Formateur::latest()->paginate($perPage);
        } else {
            $formateurs = Formateur::latest()->paginate($perPage);
        }

        return view('formateurs.index', compact('formateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $formateurs= Formateur::all();

        return view('formateurs.create',compact('formateurs'));
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

        Formateur::create($requestData);

        return redirect('formateurs')->with('flash_message', 'Formateur added!');
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
        $formateur = Formateur::findOrFail($id);

        return view('formateurs.show', compact('formateur'));
    }
    public function showprofile()
    {
        $id=Auth::guard('formateur')->user()->id;
        $formateur = Formateur::findOrFail($id);

              return view('formateurs.show', compact('formateur'));
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
        $formateur = Formateur::findOrFail($id);
        return view('formateurs.edit', compact('formateur'));
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

        $formateur = Formateur::findOrFail($id);
        $formateur->update($requestData);

        return redirect('formateurs')->with('flash_message', 'Formateur updated!');
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
        Formateur::destroy($id);

        return redirect('formateurs')->with('flash_message', 'Formateur deleted!');
    }
}
