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

// Specie routes
$this->group(['middleware' => ['auth'], 'namespace' => 'Specie', 'prefix' => 'species'], function() {
    //create
    $this->get('/create', 'SpecieCreate')->name('species.create');
    $this->post('/', 'SpecieStore')->name('species.store');

    //update
    $this->get('/{specie}/edit', 'SpecieEdit')->name('species.edit');
    $this->put('/{specie}', 'SpecieUpdate')->name('species.update');

    //read
    $this->get('/list', 'SpecieIndex')->name('species.index');
    $this->get('/{specie}', 'SpecieShow')->name('species.show');

    //delete
    $this->delete('/{specie}', 'SpecieDestroy')->name('species.destroy');
});

// Animal routes
$this->group(['middleware' => ['auth'], 'namespace' => 'Animal', 'prefix' => 'animals'], function() {
    //create
    $this->get('/create', 'AnimalCreate')->name('animals.create');
    $this->post('/', 'AnimalStore')->name('animals.store');

    //update
    $this->get('/{animal}/edit', 'AnimalEdit')->name('animals.edit');
    $this->put('/{animal}', 'AnimalUpdate')->name('animals.update');

    //read
    $this->get('/list', 'AnimalIndex')->name('animals.index');
    $this->get('/{animal}', 'AnimalShow')->name('animals.show');

    //delete
    $this->delete('/{animal}', 'AnimalDestroy')->name('animals.destroy');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// User routes
//$this->group(['middleware' => ['auth'], 'namespace' => 'User', 'prefix' => 'users'], function() {
//    $this->get('/me', 'UserInfo')->name('user.profile');
//    $this->put('/me', 'UserInfoUpdate')->name('user.profile.update');
//
//    $this->group(['middleware' => ['permission:register-employee']], function () {
//        $this->get('/create', 'UserCreate')->name('users.create');
//        $this->post('/', 'UserStore')->name('users.store');
//    });
//    $this->group(['middleware' => ['permission:update-employee']], function () {
//        $this->get('/{user}/edit', 'UserEdit')->name('users.edit');
//        $this->put('/{user}', 'UserUpdate')->name('users.update');
//    });
//    $this->group(['middleware' => ['permission:read-employee']], function () {
//        $this->get('/list', 'UserList')->name('users.list');
//        $this->get('/', 'UserIndex')->name('users.index');
//        $this->get('/{user}', 'UserShow')->name('users.show');
//    });
//    $this->group(['middleware' => ['permission:delete-employee']], function () {
//        $this->delete('/{user}', 'UserDestroy')->name('users.destroy');
//    });
//});
