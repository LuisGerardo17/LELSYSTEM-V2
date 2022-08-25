<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home.homepage');
})->middleware('auth');

//CREACIÓN DE RUTAS PARA EL HOMEPAGE
Route::get('/home.homepage', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/homepage.historia', [App\Http\Controllers\Historia::class, 'index'])->name('historia');
Route::get('/homepage.vision', [App\Http\Controllers\vision::class, 'index'])->name('vision');
Route::get('/homepage.oferta', [App\Http\Controllers\Oferta::class, 'index'])->name('oferta');
Route::get('/homepage.contactos', [App\Http\Controllers\Contactos::class, 'index'])->name('contactos');
Route::get('/homepage.admisiones', [App\Http\Controllers\Admisiones::class, 'index'])->name('admisiones');

Route::get('/auth.login', [App\Http\Controllers\SessionsController::class, 'create'])->name('login');
Route::get('/auth.register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');

//Register y Login
Route::post('/auth.register', [App\Http\Controllers\RegisterController::class, 'store'])->name('register.store');
Route::post('/auth.login', [App\Http\Controllers\SessionsController::class, 'store'])->name('login.store');
Route::get('/logout', [App\Http\Controllers\SessionsController::class, 'destroy'])->name('login.destroy');

//CREACIÓN DE RUTAS PARA DOCENTE
Route::get('/docente.informatica', [App\Http\Controllers\InformaticaController::class, 'index'])->name('informatica');
Route::get('/docente.mecanica', [App\Http\Controllers\MecanicaController::class, 'index'])->name('mecanica');
Route::get('/docente.electricidad', [App\Http\Controllers\ElectricidadController::class, 'index'])->name('electricidad');

//Administrador
Route::get('/administrador.admin', [App\Http\Controllers\AdministradorController::class, 'index'])
->middleware('auth.admin')
->name('admin.index');

Route::get('/admin.home',function (){
    return view('admin.admin.home');
});
Route::get('/admin.admin',function (){
    return view('admin.admin.admin');
});
Route::get('/admin.index',function (){
    return view('admin.admin.index');
});
Route::get('/admin.payments',function (){
    return view('admin.admin.payments');
});
Route::get('/admin.period',function (){
    return view('admin.admin.period');
});
Route::get('/admin.registration',function (){
    return view('admin.admin.registration');
});
Route::get('/admin.representative',function (){
    return view('admin.admin.representative');
});
Route::get('/admin.salon',function (){
    return view('admin.admin.salon');
});
Route::get('/admin.school',function (){
    return view('admin.admin.school');
});
Route::get('/admin.section',function (){
    return view('admin.admin.section');
});
Route::get('/admin.student',function (){
    return view('admin.admin.student');
});
Route::get('/admin.subject',function (){
    return view('admin.admin.subject');
});
Route::get('/admin.teacher',function (){
    return view('admin.admin.teacher');
});


//Docente
Route::get('/docente.docente', [App\Http\Controllers\DocenteController::class, 'index'])
->middleware('auth.docente')
->name('docente.index');

//Estudiante
Route::get('/estudiante.estudiante', [App\Http\Controllers\EstudianteController::class, 'index'])
->middleware('auth.estudiante')
->name('estudiante.index');
