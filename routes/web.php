<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

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

Route::get('/redireccion',function(){
    return view('redireccion');
});

Route::get('/editarTarea',function(){
    return view('editar');
});

Route::post('/tareas',[TareaController::class,'store']);
Route::delete('/eliminar/{id}', [TareaController::class, 'destroy'])->name('tareas.destroy');
Route::get('/redireccion',[TareaController::class,'index']);
Route::get('/editarTarea',[TareaController::class,'index']);
Route::put('/editarTarea',[TareaController::class,'update'])->name('tareas.update');