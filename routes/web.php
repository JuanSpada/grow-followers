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
    if(Auth::user()){
        return redirect('home');
    }else{
        return view('welcome');
    }
});

Auth::routes();

// Route::get('/migrate', 'LinkController@cache');
// Route::get('/key', 'LinkController@artisankey');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
Route::post('/home', 'HomeController@mercadopago')->name('mercadopago');
Route::get('/terminos', 'LinkController@terminos')->name('terminos');

//RUTAS LOGEADO
Route::group(['middleware' => ['auth']], function () {
    Route::get('/configurar', 'LinkController@configurar')->name('configurar');
    Route::post('/configurar', 'HomeController@update')->name('update');
    Route::get('{id}/baja', 'HomeController@baja')->name('baja');
    Route::get('/pagoconfirmado', 'LinkController@pagoconfirmado')->name('pagoconfirmado');
    Route::get('/droplets', 'LinkController@droplets')->name('droplets');
    Route::post('/droplets', 'LinkController@adddroplet')->name('adddroplet');
    Route::delete('/droplets', 'LinkController@deletedroplet')->name('deletedroplet');
});
// LOGEADO E INSTAGRAM LOGEADO
// Route::group(['middleware' => ['auth', 'instagram']], function () {
//     Route::get('ig', 'AppController@index');
//     Route::get('/ig/search', 'AppController@search');
//     Route::get('/instagram', 'InstagramController@redirectToInstagramProvider');
//     Route::get('/instagram/callback', 'InstagramController@handleProviderInstagramCallback');
// });


//RUTAS BACKOFFICE
Route::group(['middleware' => ['auth', 'checkStatus']], function () {
    Route::get('/gestion', 'LinkController@backoffice')->name('backoffice');
    Route::get('/scripts', 'LinkController@showScripts')->name('showScripts');
    Route::get('/gestion/{id}', 'LinkController@showUser')->name('showUser');
    Route::post('/gestion/{id}', 'LinkController@editEstado')->name('editEstado');
    Route::get('/migrate', 'LinkController@migrate');
    Route::get('{id}/alta', 'Linkcontroller@alta')->name('alta');
    // Route::get('/crearcusto', 'LinkController@crearCustomizations');
    Route::get('test', 'LinkController@test');
    Route::get('{id}/delete', 'LinkController@userDelete')->name('userDelete');
    // Route::get('/gestion/generar/{id}', 'ScriptController@scriptPrueba')->name('scriptPrueba');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
