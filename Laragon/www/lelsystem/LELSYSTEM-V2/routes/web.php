<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\BuscarController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\RecursosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ListaEstudiantesController;
use App\Http\Controllers\RegistroEstudiantesController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\ActividadDocController;
use App\Http\Controllers\listaMatriculadoController;
use App\Http\Controllers\listaCursoController;
use App\Http\Controllers\RecursosDocController;
use Illuminate\Support\Facades\Auth;


Route::get('/',function (){
    return view('home');
})->name('home');


//Register y Login
//Route::resource('register',RegisterController::class)->middleware('auth');
//Route::resource('login',LoginController::class)->middleware('auth');


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

/****************************Administrador****************************************/


Route::get('/homeadmin',function (){
    return view('admin.home');
})->name('adminHome');

//admin

Route::resource('admin.admin',AdminController::class);
//recursos
Route::resource('admin/recursos',RecursosController::class);
Route::resource('admin/cursos',CursoController::class);
//endrecursos

    //courses
    Route::get('/admin.curse',function (){
        return view('admin.courses.curse');
    })->name('curse');

    Route::get('/CourseEdit',function (){
        return view('admin.courses.curseEdit');
    })->name('curseEdit');


//ADMINISTRAR ESTUDIANTE

Route::resource('admin/estudiante', EstudianteController::class);


Route::get('/admin.index',function (){
    return view('admin.admin.index');
})->name('index');




//Docente
Route::resource('Teacher.Teacher',TeacherController::class);


//ADMINISTRARDOCENTE


Route::resource('estudiante-registro',RegistroEstudiantesController::class);

//Actividades->Leonardo
Route::resource('activities/activities',ActivitiesController::class);
Route::resource('ActividadDoc',ActividadDocController::class);
//Recursos Leonardo
Route::resource('RecursosDoc',RecursosDocController::class);

//Matricula->Leonardo
Route::resource('matricula',MatriculaController::class);



//Buscar->Leonardo
Route::resource('buscar',BuscarController::class);
Route::resource('lista',ListaEstudiantesController::class);
Route::resource('listaMatriculado',listaMatriculadoController::class);
Route::resource('listaxcurso',listaCursoController::class);


//docente*******************************************************************

Route::resource('docente/docente', DocenteController::class);
Route::get('docente', function () {
    return view('docente.inicio');
});


//matricula

Route::resource('matricula',MatriculaController::class);
//Estudiantes***********************************************************
Route::get('/m',function (){
    return view('estudiante.materias');
});

Route::get("estudiante", function (){
    return view("estudiante.inicioestudiante");
});

Route::get('subir',function (){
    return view('estudiante.SubirArchivos');
});

Auth::routes();
Route::resource('administradores',AdministradoresController::class);
Route::resource('docentes',DocentesController::class);
Route::resource('estudiantes',EstudiantesController::class);
