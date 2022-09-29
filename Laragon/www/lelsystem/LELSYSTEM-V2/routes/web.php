<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdministradorController;
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
use App\Http\Controllers\ActController;
use App\Http\Controllers\RecController;

Route::get('/',function (){return redirect('/homepage');});
Route::get('/homepage',function (){
    return view('home');
})->name('home');

/*

Route::resource('auth/register',UserController::class);
Route::resource('auth/login',SessionsController::class);
*/




//Register y Login

Route::get('/auth.login', [SessionsController::class, 'create'])
->middleware('guest')
->name('login');
Route::post('/auth.login', [SessionsController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');
Route::get('/auth.register', [UserController::class, 'create'])
->middleware('guest')
->name('register');
Route::post('/auth.register', [UserController::class, 'store'])->name('register.store');

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
//endadmin
//recursos
Route::resource('admin/recursos',RecursosController::class);
Route::resource('admin/cursos',CursoController::class);
//endrecursos

/*
    Route::get('/auth.login',function (){
        return view('auth.login');
    })->name('login');
*/

    //courses
    Route::get('/admin.curse',function (){
        return view('admin.courses.curse');
    })->name('curse');

    Route::get('/CourseEdit',function (){
        return view('admin.courses.curseEdit');
    })->name('curseEdit');



//matricula

Route::resource('matricula',MatriculaController::class);

//endmatricula


//ADMINISTRAR ESTUDIANTE

Route::resource('admin/estudiante', EstudianteController::class);
Route::resource('docente/docente', DocenteController::class);

/*Route::get('/admin.estudiante',function (){
    return view('admin.estudiante.estudiante');
})->name('curse');

Route::get('/EstudianteEdit',function (){
    return view('admin.estudiante.estudianteEdit');
})->name('curseEdit');*/

Route::get('/admin.index',function (){
    return view('admin.admin.index');
})->name('index');




//Docente
Route::resource('Teacher.Teacher',TeacherController::class);
/*
Route::get('/admin.teacher',function (){
    return view('admin.teacher.teacher');
})->name('teacher');

Route::get('/TeacherEdit',function (){
    return view('admin.teacher.teacherEdit');
})->name('teacherEdit');*/

//ADMINISTRARDOCENTE

//Route::delete('Teacher/Teacher/{cedula}', [TeacherController::class, 'destroy'])->name('user.delete');

//Estudiante

/*Route::get('/estudiante.estudiante', [App\Http\Controllers\EstudianteController::class, 'index'])
->middleware('auth.estudiante')
->name('estudiante.index');
*/

Route::resource('estudiante-registro',RegistroEstudiantesController::class);

//Actividades->Leonardo
Route::resource('activities/activities',ActivitiesController::class);
Route::resource('ActividadDoc',ActividadDocController::class);
Route::resource('Act',ActController::class);

//Recursos Leonardo
Route::resource('RecursosDoc',RecursosDocController::class);

//Matricula->Leonardo
Route::resource('matricula',MatriculaController::class);
//Route::resource('listaestudiantes',MatriculaController::class);
//Route::resource('estudiantes',ListaController::class);
 

//Buscar->Leonardo
Route::resource('buscar',BuscarController::class);
Route::resource('lista',ListaEstudiantesController::class);
Route::resource('listaMatriculado',listaMatriculadoController::class);
Route::resource('listaxcurso',listaCursoController::class);
Route::resource('Rec',RecController::class);

//docente
//Arte culinario
Route::get('docente', function () {
    return view('docente.inicio'); 
});
//Mecanica
Route::get('mecanica', function () {
    return view('docente.mecanica'); 
});
//Informatica
Route::get('informatica', function () {
    return view('docente.informatica'); 
});
/*Route::get('materias', function () {
    return view('docente.materias.materias');
});*/

/*Route::get('lista', function () {
    return view('docente.listados.listados');
});*/
/*Route::get('matricula', function () {
    return view('docente.matricula.matricula');
});*/

/*Route::get('listaestudiantes', function () {
    return view('docente.listados.listaestudiantes');
});
Route::get('notas', function () {
    return view('docente.notas.notas');
});*/
Route::get('/m',function (){
    return view('estudiante.materias');
});

Route::get("estudiante", function (){
    return view("estudiante.inicioestudiante");
}); 

Route::get('subir',function (){
    return view('estudiante.SubirArchivos');

}); 

/*Route::get('activities',function(){
    return view('docente.materias.activities');
});*/

Route::get('notas',function (){
    return view('estudiante.notas.verNotas');
});
Route::get('notasmateria',function (){
    return view('estudiante.notas.vernotasMateria');
});
Route::get('listado',function (){
    return view('estudiante.listadoscursos.listado');
});
Route::get('asistencias',function (){
    return view('estudiante.listadoscursos.verAsistencias');

});
Route::get('recursos', function () {
    return view('estudiante.recursos');
});

