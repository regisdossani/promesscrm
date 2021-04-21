<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Password;

class AdminForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
    // protected $broker = 'admins';

    public function __construct()
{
    $this->middleware('guest:admin');
}
/**
 * Get the broker to be used during password reset.
 *
 * @return PasswordBroker
 */
public function broker()
{
    return Password::broker('admins');
}

/**
 * Display the form to request a password reset link.
 *
 * @return \Illuminate\Http\Response
 */
public function showLinkRequestForm()
{
    return view('auth.passwords.admin.email');
}
}
