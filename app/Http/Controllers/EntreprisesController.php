<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

use App\Entpartenaire;
use Illuminate\Http\Request;

class EntreprisesController extends Controller
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
            $entreprises = Entpartenaire::latest()->paginate($perPage);

        } else {
            $entreprises = Entpartenaire::latest()->paginate($perPage);
        }



        return view('entpartenaires.index', compact('entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

         $entreprises=Entpartenaire::all();

        return view('entpartenaires.create',compact('entreprises'));
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
        $this->validator($request->all())->validate();


        $requestData = $request->all();

        Entreprise::create($requestData);

        return redirect('entpartenaires')->with('flash_message', 'Entreprise added!');
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
        $entreprise = Entpartenaire::findOrFail($id);

        return view('entpartenaires.show', compact('entreprise'));
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
        $entreprise = Entpartenaire::findOrFail($id);

        return view('entpartenaires.edit', compact('entreprise'));
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

        $entreprise = Entpartenaire::findOrFail($id);
        $entreprise->update($requestData);

        return redirect('entpartenaires')->with('flash_message', 'Entreprise updated!');
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
        Entreprise::destroy($id);

        return redirect('entpartenaires')->with('flash_message', 'Entreprise deleted!');
}

protected function validator(array $data)
    {
        return Validator::make($data,
        [
            'raison_sociale' => ['required', 'Integer', 'max:255'],
            'reference' => ['required', 'string', 'max:255','unique:entreprise'],
            'contact_tel' => ['required', 'string', 'max:255'],

        ]);
    }
}
