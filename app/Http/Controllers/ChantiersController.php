<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Formateur;
use App\Chantier;
use App\Client;
use App\Professionnel;
use App\Newchantier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ChantiersController extends Controller
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
            $chantiers = Chantier::latest()->paginate($perPage);
        } else {
            $chantiers = Chantier::latest()->paginate($perPage);
        }

        return view('chantiers.index', compact('chantiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $teachers=Formateur::all();
        $professionnels=Professionnel::all();
        $newchantiers=Newchantier::all();

        return view('chantiers.create',compact('teachers','professionnels','newchantiers'));
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
            'nbre_appt' => 'required|numeric|gt:0',
            'Titre'=> 'required',
            'fiche_descriptive.*' => 'mimes:doc,docx,pdf,txt'

            ]);
        $requestData = $request->all();

        if ($request->hasFile('fiche_descriptive')) {
            checkDirectory("chantiers");
            $requestData['fiche_descriptive'] = uploadFile($request, 'fiche_descriptive', public_path('uploads/chantiers'));
        }
        Chantier::create($requestData);

        return redirect('chantiers')->with('flash_message', 'Chantier added!');
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
        $chantier = Chantier::findOrFail($id);

        return view('chantiers.show', compact('chantier'));
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
        $chantier = Chantier::findOrFail($id);

        return view('chantiers.edit', compact('chantier'));
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

        $chantier = Chantier::findOrFail($id);
        $chantier->update($requestData);

        return redirect('chantiers')->with('flash_message', 'Chantier updated!');
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
        Chantier::destroy($id);

        return redirect('chantiers')->with('flash_message', 'Chantier deleted!');
    }
}
