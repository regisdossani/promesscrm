<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Apprenant;
use App\Candidat;
use App\Formateur;
use App\Equipe;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = '/admin';
/*     protected $redirectTo = '/home';
 */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:formateur')->except('logout');
        $this->middleware('guest:apprenant')->except('logout');
        $this->middleware('guest:equipe')->except('logout');

    }
    public function showAdminLoginForm()
    {

        return view('auth.adminlogin', ['url' => 'admin']);

    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


    /* public function showCandidatLoginForm()
    {
        return view('auth.login', ['url' => 'candidat']);
    }


    public function candidatLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::user()->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/candidat');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

 */




    public function showApprenantLoginForm()
    {
        return view('auth.login', ['url' => 'apprenant']);
    }
    public function apprenantLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('apprenant')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/apprenant');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showFormateurLoginForm()
    {
        return view('auth.login', ['url' => 'formateur']);
    }

    public function formateurLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('formateur')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/formateur');
        }
        return back()->withInput($request->only('email', 'remember'));
    }



/**
     * Redirect back after a failed login.
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    public function showEquipeLoginForm()
    {
        return view('auth.login', ['url' => 'equipe']);
    }

    public function equipeLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('equipe')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/equipe');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
