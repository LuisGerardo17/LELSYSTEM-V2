@extends('docente.layouts.layouts')
@section('titulo', 'Materias')
@section('seccion')
   
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				lealsystem <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">

				<figure class="full-box">

					<img src="{{ asset('admin/assets/img/avatar.jpg') }}" alt="UserIcon">

				</figure>


				<ul class="full-box list-unstyled text-center">

					<li>
						<a href="{{route('login.destroy')}}" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div> 
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Cursos
					</a>
				</li>
                <li>
					<a href="arte.html" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-folder zmdi-hc-fw"></i> Arte Culinario 
					</a>
				</li>
				<li>
					<a href="artelist.html" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Lista Estudiantes 
					</a>
				</li>
				<li>
					<a href="artemat.html" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-font zmdi-hc-fw"></i> Matriculas 
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-n-1-square zmdi-hc-fw"></i> Notas 
					</a>
					
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Settings School <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="school.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> School Data</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>
	<section class="full-box dashboard-contentPage" >
		<!--fondo arreglar-->
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar ">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">4</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles titulo">ARTE CULINARIO</h1>
		    </div>
            <div class="espacio">
                <div class="row">
                    <h2>Descripccion</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur similique doloremque dignissimos molestiae? Sed veniam quaerat nostrum, reiciendis quos eius deleniti. Ex optio labore nemo dignissimos nesciunt harum qui architecto?</p>
                    <h2>Datos personales</h2>
                </div>
                <div class="row espacio flex">
                    <div class="col espacio2">
                        <h3 class="text-center">Foto</h3>
                        <img src="{{ asset('admin/assets/img/img.jpg') }}" width="250px" alt="">
                    </div>
                    <div class="col espacio2">
                        <h3 class="text-center">Nombre</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo in praesentium, accusamus iste dolorem est placeat atque, sit animi doloribus corrupti perspiciatis asperiores ea laborum unde eos quos nisi a.</p>
                    </div>
                    <div class="col espacio2">
                        <h3 class="text-center">Telefono</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo in praesentium, accusamus iste dolorem est placeat atque, sit animi doloribus corrupti perspiciatis asperiores ea laborum unde eos quos nisi a.</p>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="titulo">Parcial 1</h2>
                <div class="row espacio">
                    <h3>Recursos</h3>
                    <a class="link" href=""><p>Lorem </p></a>
                    <a class="link" href=""><p>Lorem </p></a>
                    <a class="link" href=""><p>Lorem </p></a>
                    <a class="link" href=""><p>Lorem </p></a>
                    <a class="link" href=""><p>Lorem </p></a>
                </div>
                <div class="row espacio">
                    <h3>Deberes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nemo libero blanditiis illum molestiae dolor ullam accusamus error modi fugit, tenetur iusto consectetur reprehenderit laborum explicabo repudiandae aperiam quod debitis.</p>
                </div>
                <div class="row espacio">
                    <h3>Examenes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ducimus ut culpa, tempore eos porro nam excepturi dolores vel, eligendi, ab aut neque cupiditate corporis perferendis atque ex voluptatem nemo?</p>
                </div>
            </div>
            <div>
                <h2 class="titulo">Parcial 2</h2>
                <div class="row espacio">
                    <h3>Recursos</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nemo libero blanditiis illum molestiae dolor ullam accusamus error modi fugit, tenetur iusto consectetur reprehenderit laborum explicabo repudiandae aperiam quod debitis.</p>
                </div>
                <div class="row espacio">
                    <h3>Deberes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio doloremque voluptas, nesciunt in illum, incidunt recusandae, consequatur ut molestiae excepturi? Vel voluptatibus eos libero aliquid maxime porro doloremque odit.</p>
                </div>
                <div class="row espacio"> 
                    <h3>Examenes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio doloremque voluptas, nesciunt in illum, incidunt recusandae, consequatur ut molestiae excepturi? Vel voluptatibus eos libero aliquid maxime porro doloremque odit.</p>
                </div>
            </div>
		</div>
		
	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
@endsection