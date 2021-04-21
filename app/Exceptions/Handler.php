<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Exception;
use Illuminate\Auth\AuthenticationException;
use Auth;
use Response;
use Request;

class Handler extends ExceptionHandler
{
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        if ($request->is('admin') || $request->is('admin/*')) {
            return redirect()->guest('/login/admin');
        }
        if ($request->is('equipe') || $request->is('equipe/*')) {
            return redirect()->guest('/login/equipe');
        }

        if ($request->is('apprenant') || $request->is('apprenant/*')) {
            return redirect()->guest('/login/apprenant');
        }
        if ($request->is('formateur') || $request->is('formateur/*')) {
            return redirect()->guest('/login/formateur');
        }

       /*  if ($request->is('candidat') || $request->is('candidat/*')) {
            return redirect()->guest('/login/candidat');
        } */



       return redirect()->guest(route('auth.menu'));
       /* if ($guard == "admin" && Auth::guard($guard)->check()) {
        return redirect('/admin');
    }
    if ($guard == "apprenant" && Auth::guard($guard)->check()) {
        return redirect('/apprenant');
    }

    if ($guard == "formateur" && Auth::guard($guard)->check()) {
        return redirect('/formateur');
    }
    if ($guard == "equipe" && Auth::guard($guard)->check()) {
        return redirect('/equipe');
    }

    if (Auth::guard($guard)->check()) {
        return redirect('/home');
    }

    return $next($request); */

    }

    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
   /*  protected $dontReport = [
        //
    ]; */

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
   /*  protected $dontFlash = [
        'password',
        'password_confirmation',
    ]; */

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
   /*  public function report(Throwable $exception)
    {
        parent::report($exception);
    } */

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {

        


        return parent::render($request, $exception);

}
}
