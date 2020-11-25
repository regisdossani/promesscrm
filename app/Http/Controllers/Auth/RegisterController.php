<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Admin;
use App\Apprenant;
use App\Formateur;
use App\Equipe;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:apprenant');
        $this->middleware('guest:formateur');
        // $this->middleware('guest:equipe');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'avatar' => ['sometimes','image','mimes:jpg,jpeg,bmp,svg,png', 'max:5000']
        ]);
    }
/**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

/**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showApprenantRegisterForm()
    {
        return view('auth.register', ['url' => 'apprenant']);
    }

/**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showFormateurRegisterForm()
    {
        return view('auth.register', ['url' => 'formateur']);
    }

    public function showEquipeRegisterForm()
    {
        return view('auth.register', ['url' => 'equipe']);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/admin');
    }
    protected function createApprenant(Request $request)
    {
        $this->validator($request->all())->validate();
        Apprenant::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/apprenant');
    }
    protected function createFormateur(Request $request)
    {
        $this->validator($request->all())->validate();
        Formateur::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/formateur');
    }
    protected function createEquipe(Request $request)
    {
        $this->validator($request->all())->validate();
        Equipe::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/equipe');
    }


}
