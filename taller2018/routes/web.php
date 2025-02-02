<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homeCuidador', 'HomeController@indexCuidador')->name('homeCuidador');

Route::get('/cuidador', 'UserController@listCuidador')->name('cuidador');

Route::get('/crearUsuario',array(
    'as' => 'createUserPropietario',
    'uses' => 'UserController@createUserPropietario'
));

Route::post('/registerPropietario',array(
    'as' => 'savePropietario',
    'uses' => 'UserController@saveUserPropietario'
));

Route::post('/registerCuidador',array(
    'as' => 'saveCuidador',
    'uses' => 'UserController@saveUserCuidador'
));

Route::get('/editarUsuario',array(
    'as' => 'editPropietario',
    'middleware' => 'auth',
    'uses' => 'UserController@editUserPropietario'
));

Route::get('/editarCuidador',array(
    'as' => 'editCuidador',
    'middleware' => 'auth',
    'uses' => 'UserController@editUserCuidador'
));

Route::post('/actualizarUsuario',array(
    'as' => 'updatePropietario',
    'middleware' => 'auth',
    'uses' => 'UserController@updateUserPropietario'
));

Route::post('/actualizarCuidador',array(
    'as' => 'updateCuidador',
    'middleware' => 'auth',
    'uses' => 'UserController@updateUserCuidador'
));

Route::get('/imagePerfil/{filename}', array(
    'as' => 'imagePerfil',
    'uses' => 'UserController@getImagePerfil'
));

Route::get('/profileCuidador/{user_id}', array(
    'as' => 'profileCuidador',
    'middleware' => 'auth',
    'uses' => 'UserController@getProfileCuidador'
));

Route::get('/profilePropietario/{user_id}', array(
    'as' => 'profilePropietario',
    'middleware' => 'auth',
    'uses' => 'UserController@getProfilePropietario'
));

Route::get('/profileMascota/{canino_id}', array(
    'as' => 'profileMascota',
    'middleware' => 'auth',
    'uses' => 'CaninoController@getProfileMascota'
));

Route::get('/crearCanino',array(
    'as' => 'createCanino',
    'middleware' => 'auth',
    'uses' => 'CaninoController@createCanino'
));

Route::post('/registerCanino', array(
    'as' => 'saveCanino',
    'middleware' => 'auth',
    'uses' => 'CaninoController@saveCanino'
));

Route::get('/image/{filename}', array(
   'as' => 'image',
   'uses' => 'CaninoController@getImageCanino'
));

Route::get('/editarCanino/{canino_id}', array(
    'as' => 'editCanino',
    'middleware' => 'auth',
    'uses' => 'CaninoController@editCanino'
));

Route::post('/updateCanino/{canino_id}', array(
    'as' => 'updateCanino',
    'middleware' => 'auth',
    'uses' => 'CaninoController@updateCanino'
));

Route::get('/eliminarCanino/{canino_id}', array(
    'as' => 'eliminarCanino',
    'middleware' => 'auth',
    'uses' => 'CaninoController@deleteCanino'
));

Route::get('/crearEvent/', array(
    'as' => 'crearEvent',
    'middleware' => 'auth',
    'uses' => 'EventController@createEvent'
));

Route::post('/events', array(
    'as' => 'eventsAdd',
    'middleware' => 'auth',
    'uses' => 'EventController@addEvent'
));

Route::get('/listEvent/', array(
    'as' => 'listEvent',
    'middleware' => 'auth',
    'uses' => 'EventController@listEvent'
));

Route::get('/editEvent/{event_id}', array(
    'as' => 'editEvent',
    'middleware' => 'auth',
    'uses' => 'EventController@editEvent'
));

Route::post('/updateEvent/{event_id}', array(
    'as' => 'updateEvent',
    'middleware' => 'auth',
    'uses' => 'EventController@updateEvent'
));

Route::get('/eliminarEvent/{event_id}', array(
    'as' => 'eliminarEvent',
    'middleware' => 'auth',
    'uses' => 'EventController@deleteEvent'
));

Route::get('/crearServicio/{user_id}',array(
    'as' => 'createServicio',
    'middleware' => 'auth',
    'uses' => 'ServicioController@createServicio'
));

Route::post('/registerServicio', array(
    'as' => 'saveServicio',
    'middleware' => 'auth',
    'uses' => 'ServicioController@saveServicio'
));

Route::get('/servicio',array(
    'as' => 'servicio',
    'middleware' => 'auth',
    'uses' => 'ServicioController@listServicio'
));

Route::get('/profileServicio/{servicio_id}', array(
    'as' => 'profileServicio',
    'middleware' => 'auth',
    'uses' => 'ServicioController@getProfileServicio'
));

Route::get('/servicioCuidador',array(
    'as' => 'servicioCuidador',
    'middleware' => 'auth',
    'uses' => 'ServicioController@listServicioCuidador'
));

Route::get('/aceptarServicio/{servicio_id}',array(
    'as' => 'aceptarServicio',
    'middleware' => 'auth',
    'uses' => 'ServicioController@getAceptar'
));

Route::get('/rechazarServicio/{servicio_id}',array(
    'as' => 'rechazarServicio',
    'middleware' => 'auth',
    'uses' => 'ServicioController@getRechazar'
));

Route::post('/comentario', array(
    'as' => 'comentario',
    'middleware' => 'auth',
    'uses' => 'ComentarioController@updateComentario'
));
