<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\ReleveIndividuel;
use App\Apprenant;
use App\Filiere;
use App\Module;
use App\Classe;
use App\Nosmatiere;
use App\ReleveFinal;
use Illuminate\Http\Request;

class RelevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
   /*  public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $releve_individuels = ReleveIndividuel::latest()->paginate($perPage);
        }
    else {
            $releve_individuels = ReleveIndividuel::latest()->paginate($perPage);
        }
        return view('releves.individuel.index', compact('releve_individuels'));
    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $apprenants=Apprenant::all();
        $filieres=Filiere::all();
        $modules=Module::all();
        $matieres=Nosmatiere::all();
        $classes=Classe::all();

        return view('releves.individuel.create',compact('apprenants','filieres','modules','matieres','classes'));
    }

    public function create_final()
    {
        $apprenants=Apprenant::all();
        $filieres=Filiere::all();
        $modules=Module::all();
        $matieres=Nosmatiere::all();
        $classes=Classe::all();

        return view('releves.final.create',compact('apprenants','filieres','modules','matieres','classes'));
    }

    public function store_final()
    {
        $request->validate([
            'classe_id'  => 'required|numeric',
            'apprenant_id'    => 'required|numeric',
            'nom_directeur'   => 'required|string|max:255',
            'pdt_jury'   => 'required|string|max:255',
        ]);

        $requestData = $request->all();
        ReleveFinal::create($requestData);
        $apprenant_id=$request->apprenant_id;


        $apprenant = Apprenant::where('id', $apprenant_id)
        ->select('nom', 'prenom','tel','filiere_id',
        'sexe','reference',)
        ->orderBy('nom', 'asc')
        ->get();

        return view('releve_final',compact('apprenants','filieres','modules','matieres','classes'));
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
            'classe_id'  => 'required|numeric',
            'apprenant_id'    => 'required|numeric',
            'nom_directeur'   => 'required|string|max:255'
        ]);
        $requestData = $request->all();
        ReleveIndividuel::create($requestData);

        $apprenant_id=$request->apprenant_id;
        // $apprenant= Apprenant::where('id', $apprenant_id)->first();
        // $classe=Classe::where('id',$request->classe_id);
        $classe_id=$request->class_id;
        /* $classe = Classe::where('id', $classe_id)
        ->select('name', 'filiere_id')
        ->orderBy('name', 'asc')
        ->get(); */


       $apprenant = Apprenant::where('id', $apprenant_id)
       ->select('nom', 'prenom','class_id','filiere_id',
       'sexe','reference',)
       ->orderBy('nom', 'asc')
       ->get();

         return redirect('releve_individuel')->with('apprenant', 'classe');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
   /*  public function show($id)
    {
        $releve_individuel = ReleveIndividuel::findOrFail($id);

        return view('releves.individuel.show', compact('releve_individuel'));
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $releve_individuel = ReleveIndividuel::findOrFail($id);

        return view('releves.individuel.edit', compact('releve_individuel'));
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

        $releve_individuel = ReleveIndividuel::findOrFail($id);
        $releve_individuel->update($requestData);

        return redirect('releve_individuel')->with('flash_message', 'ReleveIndividuel updated!');
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
        ReleveIndividuel::destroy($id);
        return redirect('releve_individuel')->with('flash_message', 'ReleveIndividuel deleted!');
    }
}
