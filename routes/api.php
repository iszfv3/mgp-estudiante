<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('jwt.auth');

Route::post('auth', 'Api\AuthController@authenticate')->name('usuarios.login');

Route::group(['prefix' => 'admin' ], function () {
  Route::resource('usuarios','UsuariosController');
  Route::get('usuarios/{id}/destroy', 'UsuariosController@destroy')->name('usuarios.destroy');

  Route::resource('planes', 'PlanesController');
  Route::get('planes/{id}/destroy', 'PlanesController@destroy')->name('planes.destroy');

  Route::resource('cuotas', 'CuotasController');
  Route::get('cuotas/{id}/destroy', 'CuotasController@destroy')->name('cuotas.destroy');

  Route::resource('items', 'ItemsController');
  Route::get('Items/{id}/destroy', 'ItemsController@destroy')->name('items.destroy');

  Route::get('auth/', 'Api\AuthController@getAuthenticatedUser')->name('usuarios.info');

  Route::get('logout', 'Api\AuthController@logout')->name('usuarios.logout');

  Route::resource('estudiantes','EstudianteController');
  Route::post('estudiantes/create', 'EstudianteController@create');
});
Route::get('holi', function(Request $request){
  dd($request->cookie('token'));
});
