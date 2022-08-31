@extends('layouts.appadmin')
@section('title', 'Administrador')
@section('content')
<section class="section">
        <div class="section-header">
            <h3 class="page__heading">ADMINISTRADOR</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Dashboard</h3>
                                <div class="row">
                                    <div class="col-md-4 col-xl-4">

                                    <div class="card bg-c-blue order-card">
                                            <div class="card-block">
                                            <h5>Usuarios</h5>
                                                @php
                                                 use App\Models\User;
                                                $cant_usuarios = User::count();
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                            <h5>Roles</h5>
                                                @php
                                                use Spatie\Permission\Models\Role;
                                                 $cant_roles = Role::count();
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_roles}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Cursos</h5>
                                                @php
                                                 use App\Models\Curso;
                                                $cant_cursos = Curso::count();
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-book f-left"></i><span>{{$cant_cursos}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/cursos" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                                <h5>Actividades</h5>
                                                @php
                                                 use App\Models\Actividad;
                                                $cant_actividades = Actividad::count();
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-chalkboard-teacher f-left"></i><span>{{$cant_actividades}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/actividades" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-blue order-card">
                                            <div class="card-block">
                                                <h5>Recursos</h5>
                                                @php
                                                 use App\Models\Recurso;
                                                $cant_recursos = Actividad::count();
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-laptop-code f-left"></i><span>{{$cant_recursos}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/recursos" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
>>>>>>> d542d156f3337896f692d1c3700c3b1945fdadec
