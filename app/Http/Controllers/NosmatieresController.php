<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Module;
use App\Formateur;
use App\Nosmatiere;
use Illuminate\Http\Request;

class NosmatieresController extends Controller
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
            $nosmatieres = Nosmatiere::latest()->paginate($perPage);
        } else {
            $nosmatieres = Nosmatiere::latest()->paginate($perPage);
        }

        $formateurs=Formateur::all();
        $modules=Module::all();

        return view('nosmatieres.index', compact('nosmatieres','formateurs','modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $formateurs=Formateur::all();
        $modules=Module::all();
        $nosmatieres=Nosmatiere::all();
        return view('nosmatieres.create',compact('nosmatieres','formateurs','modules'));
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

        Nosmatiere::create($requestData);

        return redirect('nosmatieres')->with('flash_message', 'Nosmatiere added!');
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
        $nosmatiere = Nosmatiere::findOrFail($id);
$formateurs=Formateur::all();
        $modules=Module::all();
        return view('nosmatieres.show', compact('nosmatieres','formateurs','modules'));
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
        $nosmatiere = Nosmatiere::findOrFail($id);

        return view('nosmatieres.edit', compact('nosmatiere'));
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

        $nosmatiere = Nosmatiere::findOrFail($id);
        $nosmatiere->update($requestData);

        return redirect('nosmatieres')->with('flash_message', 'Nosmatiere updated!');
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
        Nosmatiere::destroy($id);

        return redirect('nosmatieres')->with('flash_message', 'Nosmatiere deleted!');
    }
}
