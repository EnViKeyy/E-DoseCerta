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
