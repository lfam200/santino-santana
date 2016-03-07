<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Input;

Route::group(['middleware' => 'auth'], function(){

//  Ruta Dashboard
    Route::get('/', [
        'uses'  => 'HomeController@index',
        'as'    => 'dashboard'
    ]);

//  Ruta Usuario
    Route::get('user/{id}', [
        'uses'  =>  'UserController@show',
        'as'    =>  'user_show_path',
    ])->where('id','[0-9]+');

// Rutas Clientes
    Route::get('customers', [
        'uses'  => 'CustomersController@index',
        'as'    => 'customers_show_path'
    ]);

    Route::get('customers/create', [
        'uses'  =>  'CustomersController@create',
        'as'    =>  'customer_create_path',
    ]);

    Route::post('customers/create', [
        'uses'  =>  'CustomersController@store',
        'as'    =>  'customer_store_path',
    ]);

    Route::get('customer/{id}', [
        'uses'  =>  'CustomersController@show',
        'as'    =>  'customer_show_path',
    ]);

//  Rutas Mascotas

    Route::get('pets/create/{id}', [
        'uses'  =>  'PetsController@create',
        'as'    =>  'pet_create_path',
    ]);

    Route::get('dropdown', function(){
        $id = Input::get('option');
        $razas = \App\Race::where('specie_id','=',$id);
        return $razas->lists('name', 'id');
    });

    Route::post('pets/create', [
        'uses'  =>  'PetsController@store',
        'as'    =>  'pet_store_path',
    ]);

    Route::get('pet/{id}', [
        'uses'  =>  'PetsController@show',
        'as'    =>  'pet_show_path',
    ]);

});

Route::group(['prefix' => 'api'], function () {
    Route::get('/', function () {
        return 'Hola soy tu api';
    });
});


Route::get('auth/login',[
    'uses'  => 'AuthController@index',
    'as'    => 'auth_show_path',
]);


Route::post('auth/login',[
    'uses'  => 'AuthController@store',
    'as'    => 'auth_store_path',
]);

Route::get('auth/logout', [
    'uses' => 'AuthController@destroy',
    'as'   => 'auth_destroy_path',
]);

