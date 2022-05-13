<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\servicio\HomeController;
use Barryvdh\Snappy\Facades\SnappyPdf;
use App\Models\section;

Route::get('/files', function () {
});

Route::get('/welcome', function () {
});


Route::post('NuevoRegistro/setfiles', [HomeController::class, 'setFiles']);
Route::post('saveSection1', [HomeController::class, 'saveSection1'])->name('saveSection1');
Route::post('saveSection2', [HomeController::class, 'saveSection2'])->name('saveSection2');
Route::post('saveSection3', [HomeController::class, 'saveSection3'])->name('saveSection3');
Route::post('saveSection4', [HomeController::class, 'saveSection4'])->name('saveSection4');
Route::post('saveSection5', [HomeController::class, 'saveSection5'])->name('saveSection5');
Route::post('saveSection6', [HomeController::class, 'saveSection6'])->name('saveSection6');
Route::post('saveSection7', [HomeController::class, 'saveSection7'])->name('saveSection7');
Route::post('saveSection8', [HomeController::class, 'saveSection8'])->name('saveSection8');
Route::post('saveSection9', [HomeController::class, 'saveSection9'])->name('saveSection9');
Route::post('saveSection10', [HomeController::class, 'saveSection10'])->name('saveSection10');
Route::post('saveSection11', [HomeController::class, 'saveSection11'])->name('saveSection11');

Route::post('saveEvidence', [HomeController::class, 'Evidence'])->name('Evidence');



Route::get('/', [LoginController::class, 'ShowLoginForm'])->name('showlogin');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/teams', [HomeController::class, 'teams'])->name('teams');/*Retorna la vista de las grua**/

Route::get('/customers', [HomeController::class, 'customers'])->name('customers');/*Retorna la vista de los clientes**/

Route::post('/Clientes/process-cliente', [HomeController::class, 'process_cliente'])->name('process-customers');
Route::get('/Clientes/dataClientes', [HomeController::class, 'dataClientes'])->name('load-data');

/*Consultas de clientes por sucursal y equipos por clientes nuevo registro **/
Route::get('teams/dataClientes/{val}', [HomeController::class, 'load_empresas']);
Route::post('teams/process-teams', [HomeController::class, 'process_teams'])->name('process_teams');
Route::get('NuevoRegistro/business/{val}', [HomeController::class, 'load_business']);

Route::get('equipos/data/{id}', [HomeController::class, 'load_equipos']);




/*Rutas relacionada con nuevos registros**/
Route::get('NuevoRegistro', [HomeController::class, 'NewReport'])->name('NewReport');

Route::post('NuevoRegistro/pruebas', [HomeController::class, 'pruebas']);

Route::get('Reporte/prueba/{id_equipo}/{Folio}', [HomeController::class, 'service_report']);

Route::get('/sections/{id}', [HomeController::class, 'sections']);

Route::get('/subsections/{id}', [HomeController::class, 'subsection']);

Route::get('/items/{id}', [HomeController::class, 'items']);

Route::get('/prueba/{id}', [HomeController::class, 'Coments']);// Rutas de prueba en la aplicacion



