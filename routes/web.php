<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Apprenant;
use App\Candidat;
use App\Professionnel;
use App\Formateur;
use App\Pers_ressource;
use App\Http\Controllers\FullCalendarEventMasterController;



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

Route::get('about', function ()
    {
        return view('frontend.about');
    });
    Route::get('courses', function ()
    {
        return view('frontend.courses');
    });
    Route::get('contact', function ()
    {
        return view('frontend.contact');
    });

Auth::routes();

Route::group(['middleware'=>['auth:web,admin']], function() {
     Route::resource('/partenaires', 'PartenairesController');
     Route::get('partenaires/{id}',function($id){
        return view('partenaires.show');
    });

    Route::resource('/clients', 'ClientsController');
    Route::resource('/fiches', 'FichedescriptivesController');
    Route::resource('/suivipostchantiers', 'PostchantiersController');
    Route::resource('/eqattendances', 'EqattendancesController');
    Route::resource('/professionnels', 'ProfessionnelsController');
    Route::resource('/persressources', 'Pers_ressourcesController');
    Route::resource('/formations', 'FormationsController');
    Route::resource('/typeformations', 'TypeformationsController');
    Route::resource('/admin/roles','RolesController');
    Route::resource('admin/permissions', 'PermissionsController');

    Route::resource('attendances', 'AttendancesController');
    Route::view('date', 'attendances.date');


    Route::resource('classe', 'ClassesController');
    Route::resource('subject', 'ModulesController');
     Route::get('attendance', 'AttendancesController@index')->name('attendance.index');
    Route::get('assign-subject-to-class/{id}', 'ClassesController@assignSubject')->name('class.assign.subject');
    Route::post('assign-subject-to-class/{id}', 'ClassesController@storeAssignedSubject')->name('store.class.assign.subject');

    Route::view('/home', 'home');
    Route::get('admin', function()
    {
         return view('admins.dashboard');
    });
});




Route::group(['middleware'=>['auth:equipe,admin']], function() {
    Route::resource('/candidats', 'CandidatsController');
    Route::resource('/formateurs', 'FormateursController');
    Route::resource('/stages', 'StagesController');
    Route::get('/partenaires','PartenairesController@index');
    Route::resource('/equipes', 'EquipesController');

    });













Route::group(['middleware'=>'auth:apprenant,admin'],
function() {
    Route::get('candidats/{id}', [ 'as'=>'candidat.edit', 'uses' => 'CandidatsController@edit']);
    Route::resource('/apprenants', 'ApprenantsController');

});


Route::group(['middleware'=>'auth:apprenant'],
     function() {
        Route::get('/apprenant', function () {
            return view('apprenants.dashboard');
        });
 });

 Route::post('/inscription','CandidatsController@inscription');

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



   Route::group(['middleware'=>['auth:equipe']], function(){
    Route::get('/equipe', function () {
        return view('equipes.dashboard');
    });
    Route::get('/equipes/profile','EquipesController@show');
});




Route::group(['middleware'=>'auth:formateur,admin'], function() {
Route::group(['prefix' => 'formateur'], function () {

        Route::get('/', function () {
            return view('formateurs.dashboard');
        });
        Route::get('/profile','FormateursController@showprofile');
    });
});


Route::view('/menu', 'auth.menu');
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/apprenant', 'Auth\LoginController@showApprenantLoginForm');
Route::get('/login/formateur', 'Auth\LoginController@showFormateurLoginForm');
Route::get('/login/equipe', 'Auth\LoginController@showEquipeLoginForm');


/*
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/apprenant', 'Auth\RegisterController@showApprenantRegisterForm');
Route::get('/register/formateur', 'Auth\RegisterController@showFormateurRegisterForm'); */

/** Les pages de connexion apprenant et formateur*/
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/apprenant', 'Auth\LoginController@apprenantLogin');
Route::post('/login/formateur', 'Auth\LoginController@formateurLogin');
Route::post('/login/equipe', 'Auth\LoginController@equipeLogin');

/*
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/apprenant', 'Auth\RegisterController@createApprenant');
Route::post('/register/formateur', 'Auth\RegisterController@createFormateur'); */


 /* Route::view('/apprenant', 'apprenants.dashboard');
Route::view('/formateur', 'formateurs.dashboard');*/


/** Les dashboard des apprenants et formateurs*/



/** La page d'inscriprion du candidat dans le frontend*/
Route::get('/candidat', function () {
    return view('preinscription');
});



//fullcalender
Route::get('/calendrier','CalendrierController@index');
Route::post('/calendrier/create','CalendrierController@create');
Route::post('/calendrier/update','CalendrierController@update');
Route::post('/calendrier/delete','CalendrierController@destroy');