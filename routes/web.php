<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Apprenant;
use App\Candidat;
use App\Professionnel;
use App\Formateur;
use App\Pers_ressource;
use App\Filiere;
use App\Promo;
use App\Http\Controllers\FullCalendarEventMasterController;
use App\Http\Controllers\ChartJsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function()
    {
        return view('frontend.index');
    })->name('frontend.index');


    Route::view('/menu', 'auth.menu')->name('auth.menu');
/** La page d'inscriprion du candidat dans le frontend*/
Route::get('/candidature', function () {

    $candidats=Candidat::all();
    return view('preinscription',compact('candidats'));
});


Route::get('/test','CandidatsController@test_code' ) ;

Route::post('/inscription','CandidatsController@inscription');

Route::post('dossier','CandidatsController@voir_dossier');


Route::get('candidature/{$id}/edit', 'CandidatsController@edit_dossier');
Route::get('/editdossier', function () {
    return view('editdossier');
});

//Customer Password Reset routes
Route::prefix('admin')->group(function() {
  /*   Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/email', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
  Route::get('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.reset')->name('admin.password.update');
 */

//admin password reset routes
    /* Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
 */
  //admin password reset routes
  Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});








Auth::routes();



Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/apprenant', [LoginController::class,'showApprenantLoginForm']);
Route::get('/login/formateur', [LoginController::class,'showFormateurLoginForm']);
Route::get('/login/equipe', [LoginController::class,'showEquipeLoginForm']);


/** Les pages de connexion apprenant et formateur*/
Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/login/apprenant',[LoginController::class,'apprenantLogin']);
Route::post('/login/formateur', [LoginController::class,'formateurLogin']);
Route::post('/login/equipe', [LoginController::class,'equipeLogin']);

// Route::get('logout', 'LoginController@logout');


Route::group(['middleware'=>['auth:web,admin']], function() {
    Route::view('admin', 'admins.dashboard');
    Route::resource('admins', 'AdminsController');




    Route::resource('/entpartenaires', 'EntpartenairesController');

     Route::resource('/partenaires', 'PartenairesController');
     Route::get('partenaires/{id}',function($id){
        return view('partenaires.show');
    });

    Route::resource('/clients', 'ClientsController');
    Route::resource('/fiches', 'FichedescriptivesController');
    Route::resource('/suivipostchantiers', 'PostchantiersController');

    Route::resource('/pers_ressources', 'Pers_ressourcesController');

    Route::resource('/formations', 'FormationsController');

    Route::resource('/typeformations', 'TypeformationsController');
    Route::resource('roles','RolesController');
    Route::resource('permissions', 'PermissionsController');

    Route::resource('attendances', 'AttendancesController');
    Route::view('date', 'attendances.date');


    Route::resource('classe', 'ClassesController');
    Route::resource('subject', 'ModulesController');

    Route::view('/home', 'home');

});



Route::group(['middleware'=>'auth:apprenant'],
     function() {
        Route::view('/apprenant', 'apprenants.dashboard') ;
 });

 Route::group(['middleware'=>['auth:equipe']], function(){
    Route::view('/equipe', 'equipes.dashboard');

    Route::get('/equipes/profile','EquipesController@show');
});


Route::group(['middleware'=>['auth:formateur']], function(){
   Route::view('/formateur','formateurs.dashboard') ;

    Route::get('/profile','FormateursController@showprofile');
});

Route::get('logout', [LoginController::class,'logout']);

Route::group(['middleware'=>['auth:equipe,admin']], function() {
    Route::get('/candidats', 'CandidatsController@index');
    Route::get('/candidats/{$id}', 'CandidatsController@show');
    // Route::get('/candidats/{$id}/edit', 'CandidatsController@edit');
    Route::get('/candidats/create', 'CandidatsController@create');
    Route::post('/candidats', 'CandidatsController@store');




    Route::resource('/formateurs', 'FormateursController');
    Route::resource('/stages', 'StagesController');
    Route::get('/listpartenaires','PartenairesController@index');
    Route::resource('/equipes', 'EquipesController');
    Route::resource('/filieres', 'FilieresController');
    Route::resource('/testcandidats', 'TestcandidatsController');
    Route::resource('/promos', 'PromosController');
    Route::resource('/apprenants', 'ApprenantsController');
    Route::resource('/modules', 'ModulesController');
    Route::resource('/newchantiers', 'NewchantiersController');
    Route::resource('/chantiers', 'ChantiersController');
    Route::resource('/teacherattendances', 'TeacherattendancesController');
    Route::resource('/attendances', 'AttendancesController');
    Route::resource('/eqattendance', 'EqattendanceController');
    Route::resource('/entpartenaires', 'EntpartenairesController');
    Route::resource('/nosmatieres', 'NosmatieresController');
    Route::get('/releve', 'RelevesController@create');
    Route::get('/relevefinal', 'RelevesController@create_final');
    Route::resource('/marks', 'MarksController');
    Route::get('chartjs', [ChartJsController::class, 'index'])->name('chartjs.index');

    Route::resource('/encadreurs', 'EncadreursController');
    Route::get('attendance', 'AttendancesController@index')->name('attendance.index');
    Route::get('assign-subject-to-class/{id}', 'ClassesController@assignSubject')->name('class.assign.subject');
    Route::post('assign-subject-to-class/{id}', 'ClassesController@storeAssignedSubject')->name('store.class.assign.subject');

    });


Route::group(['middleware'=>'auth:apprenant,admin'],
function() {
    Route::get('candidats/{id}', [ 'as'=>'candidat.edit', 'uses' => 'CandidatsController@edit']);

});




 Route::group(['middleware'=>['auth:admin,equipe']], function(){
    Route::get('/partenaires', 'PartenairesController@index');
    Route::get('/persressources', 'Pers_ressourcesController@index');

 //
 Route::get('stock',[
    'uses' => 'GenerationsController@index',
    'as' => 'index.generation'
    ]);

 Route::get('generation',[
  'uses'=> 'GenerationsController@generation_home',
  'as'=> 'generation.home'
  ]);



Route::get('generation/modifier/{id}',[
  'uses' => 'GenerationsController@get_edit_generation',
  'as' => 'get_edit_generation'
  ]);

Route::post('generation/modifier/{id}',[
  'uses' => 'GenerationsController@edit_generation',
  'as' => 'edit.generation'
  ]);
Route::get('generation/delete/{id}',[
  'uses' => 'GenerationsController@destroy_generation',
  'as' => 'destroy.generation'
  ]);
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Entres
Route::get('/entres/add',[
  'uses' => 'GenerationsController@get_add_entres',
  'as' => 'get_add_entres'
]);
Route::post('entres/add',[
  'uses' => 'GenerationsController@post_add_entres',
  'as' => 'add.entres'
]);
Route::get('entres',[
  'uses' => 'GenerationsController@show_entres',
  'as' => 'show.entres'
]);
//Edit entres
Route::get('entres/modifier/{id}',[
  'uses' => 'GenerationsController@get_edit_entres',
  'as' => 'get_edit_entres'
  ]);
Route::post('entres/modifier/{id}',[
  'uses' => 'GenerationsController@edit_entres',
  'as' => 'edit.entres'
]);

//delete

Route::get('entres/delete/{id}',[
  'uses' => 'GenerationsController@destroy_entres',
  'as' => 'destroy.entres'
  ]);
//---------------------------------------------------------------------------------------------------------------------------------------------END ENTRES--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Sorties--------------------------------------------------------------------------------------------------------
Route::get('/sorties/add',[
  'uses' => 'GenerationsController@get_add_sorties',
  'as' => 'get_add_sorties'
]);
Route::post('sorties/add',[
  'uses' => 'GenerationsController@post_add_sorties',
  'as' => 'add.sorties'
]);
Route::get('sorties',[
  'uses' => 'GenerationsController@show_sorties',
  'as' => 'show.sorties'
]);
//Edit sorties
Route::get('sorties/modifier/{id}',[
  'uses' => 'GenerationsController@get_edit_sorties',
  'as' => 'get_edit_sorties'
  ]);
Route::post('sorties/modifier/{id}',[
  'uses' => 'GenerationsController@edit_sorties',
  'as' => 'edit.sorties'
]);

//delete

Route::get('sorties/delete/{id}',[
  'uses' => 'GenerationsController@destroy_sorties',
  'as' => 'destroy.sorties'
  ]);
//---------------------------------------------------------------------------------------------------------------------------------------------END Sorties--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//---------------------------------------------------------------------------------------------------------------------------------------------Types--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Route::get('types',[
  'uses' => 'GenerationsController@index_types',
  'as' => 'type.home'
]);
Route::post('types',[
  'uses' => 'GenerationsController@post_types',
  'as' => 'post.types'
]);

Route::get('type/{id}',[
  'uses' => 'GenerationsController@single_type',
  'as' => 'single.type'
  ]);
Route::get('types/modifier/{id}',[
  'uses' => 'GenerationsController@get_edit_page_types',
  'as' => 'get_edit_page_types'
  ]);
Route::post('types/modifier/{id}',[
  'uses' => 'GenerationsController@edit_page_types',
  'as' => 'edit.page.types'
]);

//delete

Route::get('types/delete/{id}',[
  'uses' => 'GenerationsController@destroy_page_types',
  'as' => 'destroy.page.types'

  ]);

  Route::get('client/{id}',[
    'uses' => 'GenerationsController@single_client',
    'as' => 'single.client'
  ]);
  Route::get('client/edit/{id}',[
    'uses' => 'GenerationsController@get_edit_client',
    'as' => 'get_edit_client'
  ]);
  Route::post('client/edit/{id}',[
    'uses' => 'GenerationsController@edit_client',
    'as' => 'edit.client'
  ]);

 });







Route::group(['middleware'=>'auth:formateur,admin'], function() {

});




/*
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/apprenant', 'Auth\RegisterController@showApprenantRegisterForm');
Route::get('/register/formateur', 'Auth\RegisterController@showFormateurRegisterForm'); */


/*
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/apprenant', 'Auth\RegisterController@createApprenant');
Route::post('/register/formateur', 'Auth\RegisterController@createFormateur'); */


 /* Route::view('/apprenant', 'apprenants.dashboard');
Route::view('/formateur', 'formateurs.dashboard');*/


/** Les dashboard des apprenants et formateurs*/






//fullcalender
Route::get('/calendrier','CalendrierController@index');
Route::post('/calendrier/create','CalendrierController@create');
Route::post('/calendrier/update','CalendrierController@update');
Route::post('/calendrier/delete','CalendrierController@destroy');
