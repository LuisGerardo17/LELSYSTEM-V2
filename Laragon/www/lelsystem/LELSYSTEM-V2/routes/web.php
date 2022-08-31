<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroEstudiantesController;
use App\Http\Controllers\TeacherController;

Route::get('/homepage',function (){
    return view('home');
})->name('home');


Route::get('/auth.login', [SessionsController::class, 'create'])
->middleware('guest')
->name('login');
Route::get('/auth.register', [RegisterController::class, 'create'])
->middleware('guest')
->name('register');

//Register y Login
Route::post('/auth.register', [RegisterController::class, 'store'])->name('register.store');
Route::post('/auth.login', [SessionsController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');

//CREACIÓN DE RUTAS PARA EL HOMEPAGE
Route::get('/home.homepage', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/homepage.historia', [App\Http\Controllers\Historia::class, 'index'])->name('historia');
Route::get('/homepage.vision', [App\Http\Controllers\vision::class, 'index'])->name('vision');
Route::get('/homepage.oferta', [App\Http\Controllers\Oferta::class, 'index'])->name('oferta');
Route::get('/homepage.contactos', [App\Http\Controllers\Contactos::class, 'index'])->name('contactos');
Route::get('/homepage.admisiones', [App\Http\Controllers\Admisiones::class, 'index'])->name('admisiones');

//CREACIÓN DE RUTAS PARA DOCENTE
Route::get('/docente.informatica', [App\Http\Controllers\InformaticaController::class, 'index'])->name('informatica');
Route::get('/docente.mecanica', [App\Http\Controllers\MecanicaController::class, 'index'])->name('mecanica');
Route::get('/docente.electricidad', [App\Http\Controllers\ElectricidadController::class, 'index'])->name('electricidad');

//Administrador


Route::get('/homeadmin',function (){
    return view('admin.home');
})->name('adminHome');

    //activities
    Route::get('/admin.activities',function (){
        return view('admin.activities.activities');
    })->name('activities');

    Route::get('/adminEdit',function (){
        return view('admin.activities.activitiesEdit');
    })->name('activitiesEdit');


    Route::get('/admin.admin',function (){
        return view('admin.admin.admin');
    })->middleware('auth')
      ->name('admin');
/*
    Route::get('/auth.login',function (){
        return view('auth.login');
    })->name('login');
*/

    Route::get('/adminEdit',function (){
        return view('admin.admin.adminEdit');
    })->name('adminEdit');

    //courses
    Route::get('/admin.curse',function (){
        return view('admin.courses.curse');
    })->name('curse');

    Route::get('/CourseEdit',function (){
        return view('admin.courses.curseEdit');
    })->name('curseEdit');

    //resourses
    Route::get('/admin.recourses',function (){
        return view('admin.resourses.recourses');
    })->name('recourses');

    Route::get('/ResoursesEdit',function (){
        return view('admin.resourses.recoursesEdit');
    })->name('recoursesEdit');

    //teacher
    /*Route::get('/admin.teacher',function (){
        return view('admin.teacher.teacher');
    })->name('teacher');

    Route::get('/TeacherEdit',function (){
        return view('admin.teacher.teacherEdit');
    })->name('teacherEdit');*/


Route::get('/admin.index',function (){
    return view('admin.admin.index');
})->name('index');




//Docente
Route::get('/docente.docente', [DocenteController::class, 'index'])
->middleware('auth.docente')
->name('docente.index');
Route::resource('Teacher.Teacher',TeacherController::class);
//Route::delete('Teacher/Teacher/{cedula}', [TeacherController::class, 'destroy'])->name('user.delete');
//Estudiante
/*Route::get('/estudiante.estudiante', [App\Http\Controllers\EstudianteController::class, 'index'])
->middleware('auth.estudiante')
->name('estudiante.index');
*/





Route::resource('estudiante-registro',RegistroEstudiantesController::class);
//admin
Route::resource('admin.admin',AdminController::class);
Route::get('/admin.admin',[AdminController::class,'index'])
->middleware('auth.admin')
->name('admin.index');

