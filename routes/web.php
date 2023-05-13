<?php

use App\Mail\welcomemail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/', 'Main@login')->name('login');
Route::post('/submissao','Main@submissao')->name('submissao');
Route::get('/dashboard', 'Main@dashboard')->name('dashboard');
Route::get('/cadastroitem', 'Main@cadastroitem')->name('cadastroitem');
Route::post('/cadastrolivrosubmissao', 'Main@cadastrosubmissao')->name('cadastrosubmissao');
Route::get('/cadastro','Main@cadastro')->name('cadastro');
Route::post('/verificacadastro','Main@verificacadastro')->name('verificacadastro');
Route::get('/sair','Main@sair')->name('sair');
Route::get('/sobre','Main@sobre')->name('sobre');

//Route::post('/email', 'Main@email')->name('email');
//Route::get('/deletar/{id}','Main@excluir')->name('deletar');
//Route::get('/Dashboardl','Main@dashboardl')->name('dashboardl');


