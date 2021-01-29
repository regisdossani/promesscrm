<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Apprenant;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use DB;
use App\Equipe;
use Illuminate\Http\Request;

class EquipesController extends Controller
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
        $perPage = 5;

        if (!empty($keyword)) {
            $equipes = Equipe::orderBy('id','DESC')->paginate($perPage);
        } else {
            $equipes = Equipe::orderBy('id','DESC')->paginate($perPage);
        }

        return view('equipes.index', compact('equipes'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::get()->pluck('name', 'name');
        $teams = Equipe::all();

        return view('equipes.create',compact('teams','roles'));
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
            'nom_prenom'=> 'required',
            'reference'=> 'required',
            'password'=> 'required',
            'tel'=> 'required',
           'sexe'=> 'required',

            'email' => 'required|email|unique:equipes,email',
            'photo' => ['sometimes','image','mimes:jpg,jpeg,bmp,svg,png', 'max:5000'],
            'cv.*' => 'mimes:doc,docx,pdf,txt',
            'contrat.*' => 'mimes:doc,docx,pdf,txt',

            ]);



        $requestData = $request->all();

        $requestData['password'] = Hash::make($requestData['password']);

        if ($request->hasFile('cv')) {
            checkDirectory("equipe");
            $requestData['cv'] = uploadFile($request, 'cv', public_path('uploads/equipe'));
        }
        if ($request->hasFile('photo')) {
            checkDirectory("equipe");
            $requestData['photo'] = $requestData['photo'] =uploadFile($request, 'photo', public_path('uploads/equipe'));
        }
      /*   if ($request->hasFile('contrat')) {
            checkDirectory("equipe");
            $requestData['contrat'] = $requestData['contrat'] =uploadFile($request, 'contrat', public_path('uploads/equipe'));
        } */
      $team=  Equipe::create($requestData);

        $role= new Role();
        $role->name=$request->roles;

       $team->assignRole( $requestData['roles']);

        $directeur=Equipe::whereName('Directeur-Promess')->first()->equipes;
      /*   User::whereHas('roles', function($q) {
            $q->whereName('insert_name_of_role');
        })->get(); */

        if(isset($directeur) && !empty($directeur))
         {
                $admin=Admin::create([
                    'username' => $request->nom_prenom,
                    'password' => bcrypt($request->password),
                    'email' => $request->email,
                ]);
                $admin->assignRole('superadmin');
            }

        return redirect('equipes')->with('flash_message', 'Membre de l\'équipe crée!');
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
        $equipe = Equipe::findOrFail($id);
        return view('equipes.show', compact('equipe'));
    }

    public function showprofile()
    {
        $id=Auth::guard('equipe')->user()->id;
        $equipe = Equipe::findOrFail($id);

              return view('equipes.show', compact('equipe'));
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
        $equipe = Equipe::findOrFail($id);
        $roles = Role::pluck('name','name')->all();
         $equipeRole = $equipe->roles->pluck('name','name')->all();
        return view('equipes.edit', compact('equipe','roles','equipeRole'));
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
        $this->validate($request,[
            'nom_prenom'=> 'required',
            'password'=> 'required',
            'email' => 'email|unique:equipes,email',
            'photo' => ['sometimes','image','mimes:jpg,jpeg,bmp,svg,png', 'max:5000'],
            'cv.*' => 'mimes:doc,docx,pdf,txt',
            'contrat.*' => 'mimes:doc,docx,pdf,txt',

            ]);



        $requestData = $request->all();

        if(!empty($requestData['password'])){
            $requestData['password'] = Hash::make($requestData['password']);
        }else{
            $requestData = array_except($requestData,array('password'));
        }


        $equipe = Equipe::findOrFail($id);
        $equipe->update($requestData);

        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $equipe->assignRole($requestData['roles']);

        return redirect('equipes')->with('flash_message', 'Equipe updated!');
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
        Equipe::destroy($id);
        return redirect('equipes')->with('flash_message', 'Equipe deleted!');
    }




}
