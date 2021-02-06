<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\AprendizController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\ProgramaController;



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
    return view('modules.auth.form_login');
});

Route::get('escritorio',[DashboardController::class,'index'])->name('dashboard.index');
Route::get('perfil',[DashboardController::class,'perfil'])->name('modules.dashboard.perfil');



Route::get('login',[LoginController::class,'form_login'])->name('login.form_login');
Route::post('auth',[LoginController::class,'auth'])->name('login.auth');
Route::get('logout',[LoginController::class,'logout'])->name('login.logout');


Route::get('usuario',[AdminController::class,'index'])->name('admin.index');
Route::get('usuario/create',[AdminController::class,'create'])->name('admin.create');
Route::post('usuario',[AdminController::class,'store'])->name('admin.store');
Route::delete('usuario/{id}',[AdminController::class,'destroy'])->name('admin.destroy'); 
Route::get('usuario/edit/{id}',[AdminController::class,'edit'])->name('admin.edit');
Route::patch('usuario/update/{id}',[AdminController::class,'update'])->name('admin.update');
Route::get('usuario/{id}',[AdminController::class,'show'])->name('admin.show'); 



Route::get('instructor',[InstructorController::class,'index'])->name('instructor.index');
Route::get('instructor/create',[InstructorController::class,'create'])->name('instructor.create');
Route::post('instructor',[InstructorController::class,'store'])->name('instructor.store');
Route::delete('instructor/{id}',[InstructorController::class,'destroy'])->name('instructor.destroy'); 
Route::get('instructor/edit/{id}',[InstructorController::class,'edit'])->name('instructor.edit');
Route::patch('instructor/update/{id}',[InstructorController::class,'update'])->name('instructor.update');
Route::get('instructor/{id}',[InstructorController::class,'show'])->name('instructor.show'); 

Route::get('aprendiz',[AprendizController::class,'index'])->name('aprendiz.index');
Route::get('aprendiz/create',[AprendizController::class,'create'])->name('aprendiz.create');
Route::post('aprendiz',[AprendizController::class,'store'])->name('aprendiz.store');
Route::delete('aprendiz/{id}',[AprendizController::class,'destroy'])->name('aprendiz.destroy'); 
Route::get('aprendiz/edit/{id}',[AprendizController::class,'edit'])->name('aprendiz.edit');
Route::patch('aprendiz/update/{id}',[AprendizController::class,'update'])->name('aprendiz.update');
Route::get('aprendiz/{id}',[AprendizController::class,'show'])->name('aprendiz.show'); 
Route::get('aprendiz/confirm/{id}',[AprendizController::class,'confirm'] )->name('aprendiz.confirm');

Route::get('ficha',[FichaController::class,'index'])->name('ficha.index');
Route::get('ficha/create',[FichaController::class,'create'])->name('ficha.create');
Route::post('ficha',[FichaController::class,'store'])->name('ficha.store');
Route::get('ficha/edit/{id}',[FichaController::class,'edit'])->name('ficha.edit');
Route::delete('ficha/{id}',[FichaController::class,'destroy'])->name('ficha.destroy'); 
Route::patch('ficha/update/{id}',[FichaController::class,'update'])->name('ficha.update');
Route::get('ficha/{id}',[FichaController::class,'show'])->name('ficha.show');
Route::get('ficha/confirm/{id}',[FichaController::class,'confirm'] )->name('ficha.confirm');

Route::get('programa',[ProgramaController::class,'index'])->name('programa.index');
Route::get('programa/create',[ProgramaController::class,'create'])->name('programa.create');
Route::post('programa',[ProgramaController::class,'store'])->name('programa.store');
Route::get('programa/edit/{id}',[ProgramaController::class,'edit'])->name('programa.edit');
Route::patch('programa/update/{id}',[ProgramaController::class,'update'])->name('programa.update');
Route::get('programa/{id}',[ProgramaController::class,'show'])->name('programa.show'); 