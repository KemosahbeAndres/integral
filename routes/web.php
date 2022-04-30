<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AppController;

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

Route::view('/', 'home')->name('page.home');
Route::view('nosotros', 'about')->name('page.about');
Route::view('contacto', 'contact')->name('page.contact');
Route::view('matricularse', 'enroll')->name('page.enroll');
Route::post('enroll', [ PageController::class, 'enrollpost' ])->name('page.enroll.post');
Route::post('message', [ PageController::class, 'contactpost' ])->name('page.contact.post');
// Route::view('iniciarsesion', 'login')->name('page.login');

// Route::get('cerrarsesion', 'SessionController@logout')->name('session.logout');
// Route::get('registrarse', 'SessionController@registerform')->name('session.register');
// Route::get('recuperar', 'SessionController@forgotform')->name('session.form');
// Route::post('login', 'SessionController@login')->name('session.login');

// Plataforma Virtual
// Route::get('/aula', [AppController::class, 'home'])->name('app.home')->middleware('auth');
Route::get('plataforma', function () {
    return redirect()->away('https://aula.integraldelnorte.cl/login/');
});
