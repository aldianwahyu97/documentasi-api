<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/key',function(){
    return str_random(32);
});

// $app->group(['prefix'=>'api/v1'],function($app){
//     $app->group(['prefix'=>'users','middleware'=>'users'],function($app){
        $app->get('/user','C_user@index');
        $app->get('/detailUser/{id}','C_User@detailUser');
        $app->post('/userAdd','C_user@createUser');
        $app->put('/userUpdate/{id}','C_user@updateUser');
        $app->delete('/userDelete/{id}','C_user@deleteUser');
    // });
    // $app->group(['prefix'=>'barang','middleware'=>'barang'],function($app){
        $app->get('/barang','C_Barang@index');
        $app->get('/detailBarang/{id}','C_Barang@detailBarang');
        $app->post('/barangAdd','C_Barang@createBarang');
        $app->put('/barangUpdate/{id}','C_Barang@updateBarang');
        $app->delete('/barangDelete/{id}','C_Barang@deleteBarang');
//     });
// });
