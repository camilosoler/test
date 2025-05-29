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

// Paginas de autenticacion
Route::view('/register', 'register');
Route::view('/login', 'login');

// Pagina de bienvenida
Route::view('/home', 'home');

// Formularios con errores intencionales
Route::view('/form-js-error', 'form_js_error');
Route::view('/form-css-error', 'form_css_error');
Route::view('/form-php-error', 'form_php_error');
Route::view('/form-html-error', 'form_html_error');
