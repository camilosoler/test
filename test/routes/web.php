<?php

use App\Services\UserService;

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

\Auth::routes(['register' => true]);

Route::get('/', function () {
    $users = (new UserService)->allUsers();
    return view('welcome', ['users' => $users]);
});
