<?php
use Illuminate\Http\Request;

Route::post('/estagiario/incluir', 'EstagiarioController@incluir');
Route::get('/estagiario/buscar', 'EstagiarioController@buscar');

Route::group([
     'prefix' => 'auth'
], function () {
      Route::post('login', 'Auth\AuthController@login')->name('login');
      Route::post('register', 'Auth\AuthController@register');

      Route::group([
         'middleware' => 'auth:api'
       ], function() {
           Route::get('logout', 'Auth\AuthController@logout');
           Route::get('user', 'Auth\AuthController@user');
           
    });
});

