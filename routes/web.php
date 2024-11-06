<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('tareas.index');
});

*/

Route::get('/', [TaskController::class,'index']);

Route::post('/', [TaskController::class,'store']);

route::delete('/{id}',[TaskController::class,'destroy'])->name('task.destroy');


