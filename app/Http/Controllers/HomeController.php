<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Apprenant;
use App\Candidat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $apprenantCount = Apprenant::count();
        $candidatCount = Candidat::count();

        return view('admin.index', compact('apprenantCount','candidatCount'));


    }





}
