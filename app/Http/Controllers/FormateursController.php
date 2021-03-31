<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Nosmatiere;
use App\Formateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class FormateursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

   /*  function __construct()
    {
         $this->middleware('auth');

    }
 */

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $formateurs = Formateur::latest()->paginate($perPage);
        } else {
            $formateurs = Formateur::latest()->paginate($perPage);
        }

        $matieres=Nosmatiere::all();

        return view('formateurs.index', compact('formateurs','matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $formateurs=Formateur::all();
        //  $matieres=Nosmatiere::all();
         $matieres = Nosmatiere::get()->pluck('nom');

        return view('formateurs.create',compact('formateurs','matieres'));
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
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom'=> 'required|string|max:255',
            'password'=> 'required',
            'tel'=> 'required|string|max:255',
            'reference' => 'required|string|max:255|unique:formateurs'

        ]);


        $requestData = $request->all();
        $requestData['password'] = Hash::make($requestData['password']);


        $formateur= Formateur::create($requestData);
       /*  if ($formateur->save()) {
            $formateur->matieres()->sync($request->matieres);
        } */

       /*  $class = Classe::findOrFail($id);
        $class->modules()->sync($request->selectedsubjects); */





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
        $matieres=Nosmatiere::all();
        $formateur = Formateur::findOrFail($id);
        return view('formateurs.edit', compact('formateur','matieres'));
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
