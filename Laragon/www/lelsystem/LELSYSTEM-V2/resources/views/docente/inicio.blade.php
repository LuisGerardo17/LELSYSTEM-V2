@extends('docente.layouts.layouts')
@section('titulo', 'Docente')
@section('seccion')
    

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<div class="full-box text-center text-uppercase">
                <h3 class="titulo">BIENVENIDO ANSHELO ALEJANDRO PROAÑO LEMA</h3>
			</div>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header text-center">
			  <h1 class="text-titles"><b>Mis Cursos</b></h1>
			</div>
		</div>
		
		<div class="full-box text-center" >
		<a href="arte.html">		
			<article class="full-box tile">
				<div  class="full-box tile-title text-center text-titles text-uppercase">
					Arte Culinario
				</div>
				<div class="full-box tile-icon text-center">
					<img width="200%"  src="{{ asset('admin/assets/img/img.jpg') }}" alt="arte">
				</div>
			</article>
		</a>
		<a href="control.html">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					control de incendios
				</div>
				<div class="full-box tile-icon text-center">
					<img width="200%" src="{{ asset('admin/assets/img/img.jpg') }}" alt="control">
				</div>
			</article>
		</a>
		<a href="controlist.html">	
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					desarrollo de software
				</div>
				<div class="full-box tile-icon text-center">
					<img width="200%" src="{{ asset('admin/assets/img/img.jpg') }}" alt="desarrollo">
				</div>
			</article>
		</a>	
		<a href="controlist.html">	
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					diseño de modas
				</div>
				<div class="full-box tile-icon text-center">
					<img width="200%" src="{{ asset('admin/assets/img/img.jpg') }}" alt="diseño">
				</div>
			</article>
		</a>
		<a href="controlist.html">	
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					guía nacional
				</div>
				<div class="full-box tile-icon text-center">
					<img width="200%" src="{{ asset('admin/assets/img/img.jpg') }}" alt="guia">
				</div>
			</article>
		</a>
		<a href="controlist.html">	
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					marketing
				</div>
				<div class="full-box tile-icon text-center">
					<img width="200%" src="{{ asset('admin/assets/img/img.jpg') }}" alt="marketing">
				</div>
			</article>
		</a>
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
