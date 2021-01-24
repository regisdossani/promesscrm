<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Exception;
use Illuminate\Auth\AuthenticationException;
use Auth;


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

        return redirect()->guest(route('login/menu'));

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
        if($e instanceof QueryException){
            $errorCode = $e->errorInfo[1];
            switch ($errorCode) {
                case 1062://code dublicate entry
                    return response([
                        'errors'=>'Duplicate Entry'
                    ],Response::HTTP_NOT_FOUND);
                    break;
                case 1364:// you can handel any auther error
                    return response([
                        'errors'=>$e->getMessage()
                    ],Response::HTTP_NOT_FOUND);
                    break;
            }
         }

        return parent::render($request, $exception);
    }

}
