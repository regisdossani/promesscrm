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
use Illuminate\Support\Str;

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
        return view('candidats.index', compact('candidats','filieres','promos'))
        ->with('i', ($request->input('page', 1) - 1) * 5);

       /*  $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('roles.index',compact('roles'))
        ->with('i', ($request->input('page', 1) - 1) * 5); */

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

    public function voir_dossier(Request $request)
    {
        $this->validate($request,[
            'code' => 'required',

            ]);
        //  return response()->json($attendances);
        $code=$request->code;
        $candidat = Candidat::where('code',$code)->firstOrFail();
        if(!$candidat)
        {
            $response = Response::json([
                                'error' => [
                                            'message' => 'Ce code est inexistant .'
                                            ]
                                ], 404);

            return $response;

        }



            $candidat = Candidat::findOrFail($candidat->id);
            $filieres=Filiere::all();
            $promos=Promo::all();
            return view('showdossier', compact('candidat','filieres','promos'));




        // return view('candidats.show', compact('candidat','filieres','promos'));
    }






    /* public function candidatEmailCheck(Request $request)
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

            return redirect('candidat')->with('msg', 'Candidature envoyé!');

        }

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
        $candidat = Candidat::findOrFail($id);
        $promos=Promo::all();
        $filieres=Filiere::all();
        return view('candidats.edit', compact('candidat','promos','filieres'));
    }

    public function test_code()
        {
            $candidats=Candidat::all();
            return view('auth.candidatlogin',compact('candidats'));
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

        return redirect('candidats')->with('flash_message', 'Candidat mis à jour!');
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

        return redirect('candidats')->with('flash_message', 'Candidat suprimé!');
    }

    public function inscription(Request $request)
    {
        $this->validate($request,[
            'nom' => 'required',
            'email'=>'unique:candidats,email',
            'pj_depotdossier.*' => 'mimes:doc,docx,pdf,txt',
            'pj_depotdossier2.*' => 'mimes:doc,docx,pdf,txt'

            ]);

            $requestData = $request->all();
            $name=$request->input('pj_depotdossier');

            if ($request->file('pj_depotdossier')!=null) {
                checkDirectory("candidats");
                uploadFile($request,$name,public_path('uploads/candidats'));
                $requestData['pj_depotdossier']=$name;
            }
            $name=$request->input('pj_depotdossier2');


        if ($request->file('pj_depotdossier2')!=null) {
                checkDirectory("candidats");
                 uploadFile($request,$name,public_path('uploads/candidats'));
                 $requestData['pj_depotdossier2']= $name;
        }




        $code= Str::random(10) ;

        $requestData['code']=$code;

        $candidat=Candidat::create($requestData);
//    Session::flash('success','Vous avez bien modifier votre stock');

  return back()->with('success', 'Votre dossier a été envoyé !,  votre numéro de dossier est  :  '.$candidat->id.' .Votre code est : '.$candidat->code.'  .Veuillez garder ce code');

}

public function edit_dossier($id)
    {
        $candidat = Candidat::findOrFail($id);
        $promos=Promo::all();
        $filieres=Filiere::all();
         return redirect('/edit_dossier')->with('candidat','promos','filieres');
    }


}
