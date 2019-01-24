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
// Criando um grupo onde agiliza os route

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    $this->get('/', 'AdminController@index')->name('admin');

    // Clientes
    $this->get('search', 'ClientsController@search')->name('admin.search');
    $this->post('search', 'ClientsController@searchClient')->name('search.client');

    $this->get('create-client', 'ClientsController@createClient')->name('create.client');
    $this->post('create-client-store', 'ClientsController@createClientStore')->name('create.client.store');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

