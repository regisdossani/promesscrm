<?php

namespace App\Http\Controllers;
use DB;

use App\Stage;

use App\Candidat;
use App\Professionnel;
use App\Classe;
use App\Apprenant;
use App\Formation;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ApprenantsController extends Controller
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
            $apprenants = Apprenant::with('class')->latest()->paginate($perPage);
        } else {
            $apprenants = Apprenant::with('class')->latest()->paginate($perPage);
        }

        return view('apprenants.index', compact('apprenants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $classes = Classe::latest()->get();

        $candidats = Candidat::latest()->get();
        $apprenants = Apprenant::latest()->get();
        $stages= Stage::all();
        $formations= Formation::latest()->get();
        $profs = Professionnel::latest()->get();

        return view('apprenants.create',compact('classes','candidats','apprenants','stages','formations','profs'));
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

      $apprenant= Apprenant::create([
            'username' => $request->username,
            'class_id' => $request->classe_id,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'note_1' => $request->note_1,
            'note_2' => $request->note_2,
            'note_3' => $request->note_3,
            'visite_terain1' => $request->visite_terain1,
            'visite_terain2' => $request->visite_terain2,
            'visite_terain3' => $request->visite_terain3,

            'password' =>  Hash::make($request->password),
            'candidat_id' => $request->candidat_id,

        ]);



       /*  if ($request->hasFile('pjconvention_stage')) {
            checkDirectory("apprenants");
            $request->pjconvention_stage= uploadFile($request,'pjconvention_stage', public_path('uploads/candidats'));
        } */
        $apprenant->assignRole("Apprenant");

/*
         Stage::create([
            'titre' => $request->titre,
            'stage_entreprise' => $request->stage_entreprise,
            'professionel_id' => $request->professionel_id,
            'stage_debut' => $request->stage_debut,
            'stage_fin' => $request->stage_fin,
            'pjconvention_stage' => $request->pjconvention_stage,
            'professionel_id' => $request->professionel_id,

        ]);

 */

/*         $apprennant = Apprenant::create($request->only('email', 'username', 'password')); //Retrieving only the email and password data
 */

        // $apprennant = Apprenant::first();
      /*   $stageid=Stage::first();
        $apprennant->stages()->attach($stageid);
 */

         return redirect('apprenants')->with('flash_message', 'Apprenant crée avec succès');
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
        $apprenant = Apprenant::findOrFail($id);
        $class = Classe::with('modules')->where('id', $apprenant->class_id)->first();

        return view('apprenants.show', compact('apprenant','class'));
    }

     public function showprofile()
    {
        $id=Auth::guard('apprenant')->user()->id;
        $apprenant = Apprenant::findOrFail($id);

              return view('apprenants.show', compact('apprenant'));
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
        $classes = Classe::latest()->get();
        $apprenant = Apprenant::findOrFail($id);
        $candidats = Candidat::all();
        $formations= Formation::all();

        return view('apprenants.edit', compact('apprenant','classes','candidats','formations'));
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

        if(!empty($requestData['password'])){
            $requestData['password'] = Hash::make($requestData['password']);
        }else{
            $requestData = array_except($requestData,array('password'));
        }

        $apprenant = Apprenant::findOrFail($id);
        $apprenant->update($requestData);



        return redirect('apprenants')->with('flash_message', 'Apprenant mis à jour!');
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

        /*$apprennant = Apprenant::findorfail($id);
        $stageid= Stage::findorfail($id);
        $apprennant->stages()->dettach($stageid);*/
        Apprenant::destroy($id);

        return redirect('apprenants')->with('flash_message', 'Apprenant deleted!');
    }


    protected function validator(array $data)
    {
        return Validator::make($data,
        [

            'username' => ['required', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'note_1' => ['required', 'string', 'max:255'],
            'note_2' => ['required', 'string', 'max:255'],
            'note_3' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:apprenants'],
            'password' => ['required', 'string', 'min:5'],

        ]);
    }
}