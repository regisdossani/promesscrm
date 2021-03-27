<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Image;
use App\Filiere;
use App\Candidat;
use App\Promo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Response;

class CandidatsController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



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
            $candidats = Candidat::latest()->paginate($perPage);
        } else {
            $candidats = Candidat::latest()->paginate($perPage);
        }
           $filieres=Filiere::all();
             $promos=Promo::all();
        return view('candidats.index', compact('candidats','filieres','promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $filieres=Filiere::all();
        $promos=Promo::all();
        $candidats=Candidat::all();

        return view('candidats.create',compact('filieres','promos','candidats'));
    }

    public function success()
    {
        return view('welcome')->with('flash_message', 'Votre dossier a été envoyé !');
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
            'nom' => 'required',
            'email'=>'unique:candidats,email',
            'pj_depotdossier.*' => 'mimes:doc,docx,pdf,txt',
            'pj_depotdossier2.*' => 'mimes:doc,docx,pdf,txt'

            ]);
            $requestData = $request->all();// This will get all the request data.


        if ($request->hasFile('pj_depotdossier')) {
            checkDirectory("candidats");
            $requestData['pj_depotdossier'] = uploadFile($request,'pj_depotdossier', public_path('uploads/candidats'));
        }

		  if ($request->hasFile('pj_depotdossier2')) {
            checkDirectory("candidats");
            $requestData['pj_depotdossier2'] = uploadFile($request,'pj_depotdossier2', public_path('uploads/candidats'));
        }


        $candidatCount = Candidat::where('email', $requestData['email']);
        if ($candidatCount->count()) {
            // return Response::json(array('msg' => 'true'));
        } else {
            Candidat::create($requestData);
            // return Response::json(array('msg' => 'false'));
        }


    return redirect()->to('/candidats')->with('flash_message', 'Votre dossier a été envoyé !');

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
        $candidat = Candidat::findOrFail($id);
        $filieres=Filiere::all();
        $promos=Promo::all();
        return view('candidats.show', compact('candidat','filieres','promos'));
    }


    public function candidatEmailCheck(Request $request)
    {
        $this->validate($request,[
            'nom' => 'required',
            'email'=>'unique:candidats,email',
            'pj_depotdossier.*' => 'mimes:doc,docx,pdf,txt',
            'pj_depotdossier2.*' => 'mimes:doc,docx,pdf,txt'

            ]);
            $requestData = $request->all();// This will get all the request data.

        if ($request->hasFile('pj_depotdossier2')) {
            checkDirectory("candidats");
            $requestData['pj_depotdossier2'] = uploadFile($request,'pj_depotdossier2', public_path('uploads/candidats'));
        }

        if ($request->hasFile('pj_depotdossier')) {
            checkDirectory("candidats");
            $requestData['pj_depotdossier'] = uploadFile($request,'pj_depotdossier', public_path('uploads/candidats'));
        }


        $candidatCount = Candidat::where('email', $requestData['email']);
        if ($candidatCount->count()) {
            return Response::json(array('msg' => 'true'));
        } else {
            Candidat::create($requestData);
            // return Response::json(array('msg' => 'false'));
          /*  $filieres=Filiere::all();
            $promos=Promo::all();
            $candidats=Candidat::all(); */
            return redirect('candidat')->with('msg', 'Candidature envoyé!');

        }

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
        $candidat = Candidat::findOrFail($id);
        $promos=Promo::all();
        $filieres=Filiere::all();
        return view('candidats.edit', compact('candidat','promos','filieres'));
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

        $candidat = Candidat::findOrFail($id);
        $candidat->update($requestData);

        return redirect('candidats')->with('flash_message', 'Candidat updated!');
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
        Candidat::destroy($id);

        return redirect('candidats')->with('flash_message', 'Candidat deleted!');
    }
    public function inscription(Request $request)
    {
        $this->validate($request,[
            'nom' => 'required',
            'email'=>'unique:candidats,email',
            'pj_depotdossier.*' => 'mimes:doc,docx,pdf,txt',
            'pj_depotdossier2.*' => 'mimes:doc,docx,pdf,txt'

            ]);

            $fileName1 = time().'.'.$request->pj_depotdossier;
            $request->pj_depotdossier->move(public_path('uploads/candidats'), $fileName1);

            $fileName2 = time().'.'.$request->pj_depotdossier2;
            $request->pj_depotdossier2->move(public_path('uploads/candidats'), $fileName2);

            $requestData = $request->all();

           /*  if ($request->hasFile('pj_depotdossier')) {
                checkDirectory("candidats");
                $requestData['pj_depotdossier'] = uploadFile($request, 'pj_depotdossier', public_path('uploads/candidats'));
            }
            if ($request->hasFile('pj_depotdossier2')) {
                checkDirectory("candidats");
                $requestData['pj_depotdossier2'] = uploadFile($request, 'pj_depotdossier2', public_path('uploads/candidats'));
            } */

           /*  if ($request->hasFile('test_pj')) {
                checkDirectory("candidats");
                $requestData['test_pj'] = uploadFile($request, 'test_pj', public_path('uploads/candidats'));
            } */


  Candidat::create($requestData);
return  redirect('candidat')->with('success', 'Votre dossier a été envoyé !');

}


}
