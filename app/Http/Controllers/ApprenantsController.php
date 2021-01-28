<?php

namespace App\Http\Controllers;
use DB;
use App\Testcandidat;
use App\Stage;
use App\Promo;
use App\Candidat;
use App\Filiere;
use App\Apprenant;
use App\Chantier;

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

    //
       $apprenant=new Apprenant();
       $candidats=Candidat::with(['testcandidat' => function($testcandidat) {
        $testcandidat->where('resultat','=','4');
        }])->get();




    $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $apprenants = Apprenant::latest()->paginate($perPage);
        } else {
            $apprenants = Apprenant::latest()->paginate($perPage);
        }

        return view('apprenants.index', compact('apprenants','candidats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tests =Testcandidat::where('resultat',4);
        $filieres = Filiere::latest()->get();
        $candidats = Candidat::latest()->get();
        $apprenants = Apprenant::latest()->get();
        // $stages= Stage::all();
        $stages = Stage::get()->pluck('referent', 'referent');

        $chantiers= Chantier::all();
        $promos= Promo::latest()->get();
        return view('apprenants.create',compact('chantiers','filieres','candidats','apprenants','stages','promos','tests'));
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

        // $requestData['password'] = Hash::make($request->password);


      $student= Apprenant::create([
            // 'class_id' => $request->classe_id,
            'candidat_id'=>$request->candidat_id,
            'filiere_id'=>$request->filiere_id,
            'promo_id'=>$request->promocandidat_id,

            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'reference' => $request->reference,
            'sexe' => $request->sexe,
            'tel' => $request->tel,
            'date_naiss'=>$request->date_naiss,
            'candidat_id'=>$request->candidat_id,
            'lieu_naiss' => $request->lieu_naiss,
            'annee'=>$request->annee,
            'password' =>  Hash::make($request->password),

        ]);

        $idStage=$request->stage_id;
        // $student = Apprenant::find(1);
        $student->stages()->attach($idStage);

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
        $filiere = Filiere::where('id', $apprenant->filiere_id)->first();
        $promo= Promo::where('id', $apprenant->promo_id)->first();

        return view('apprenants.show', compact('apprenant','filiere','promo'));
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
        $apprenant = Apprenant::findOrFail($id);
        $filieres= Filiere::all();
        $promos= Promo::all();
        $stages = Stage::get()->pluck('referent', 'referent');
        $candidats=Candidat::with(['testcandidat' => function($testcandidat) {
            $testcandidat->where('resultat','=','4');
            }])->get();

        return view('apprenants.edit', compact('promos','apprenant','candidats','filieres','stages'));
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

        $apprennant = Apprenant::findorfail($id);
        $apprennant->stages()->detach();
        Apprenant::destroy($id);

        return redirect('apprenants')->with('flash_message', 'Apprenant deleted!');
    }


    protected function validator(array $data)
    {
        return Validator::make($data,
        [
            'candidat_id' => ['required', 'Integer', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:apprenants'],
            'password' => ['required', 'string', 'min:5'],

        ]);
    }

}
