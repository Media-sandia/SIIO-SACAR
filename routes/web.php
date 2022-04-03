<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;

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
Route::get('/welcome', function(){});// 

Route::post('NuevoRegistro/setfiles', [HomeController::class,'setFiles']);
Route::post('saveSection1', [HomeController::class,'saveSection1'])->name('saveSection1');


Route::get('/', [LoginController::class,'ShowLoginForm'])->name('showlogin');
Route::post('login',[LoginController::class,'login'])->name('login'); 
Route::post('logout',[LoginController::class,'logout'])->name('logout'); 

Route::get('/home', [HomeController::class,'home'])->name('home');

Route::get('/teams', [HomeController::class,'teams'])->name('teams');/*Retorna la vista de las gruas**/

Route::get('/customers', [HomeController::class,'customers'])->name('customers');/*Retorna la vista de los clientes**/

Route::post('/Clientes/process-cliente', [HomeController::class,'process_cliente'])->name('process-customers');
Route::get('/Clientes/dataClientes', [HomeController::class,'dataClientes'])->name('load-data');

/*Consultas de clientes por sucursal y equipos por clientes nuevo registro **/
Route::get('teams/dataClientes/{val}', [HomeController::class,'load_empresas']);
Route::post('teams/process-teams', [HomeController::class,'process_teams'])->name('process_teams');
Route::get('NuevoRegistro/business/{val}', [HomeController::class,'load_business']);



/*Rutas relacionada con nuevos registros**/
Route::get('NuevoRegistro', [HomeController::class,'NewReport'])->name('NewReport');

Route::post('NuevoRegistro/pruebas', [HomeController::class,'pruebas']);

Route::get('Reporte/prueba', [HomeController::class,'pdf_prueba']);
