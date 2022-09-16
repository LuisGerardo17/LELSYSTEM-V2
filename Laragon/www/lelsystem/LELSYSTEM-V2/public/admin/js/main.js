$(document).ready(function(){
	$('.btn-sideBar-SubMenu').on('click', function(){
		var SubMenu=$(this).next('ul');
		var iconBtn=$(this).children('.zmdi-caret-down');
		if(SubMenu.hasClass('show-sideBar-SubMenu')){
			iconBtn.removeClass('zmdi-hc-rotate-180');
			SubMenu.removeClass('show-sideBar-SubMenu');
		}else{
			iconBtn.addClass('zmdi-hc-rotate-180');
			SubMenu.addClass('show-sideBar-SubMenu');
		}
	});
	$('.btn-exit-system').on('click', function(){
		swal({
		  	title: 'Are you sure?',
		  	text: "The current session will be closed",
		  	type: 'warning',
		  	showCancelButton: true,
		  	confirmButtonColor: '#03A9F4',
		  	cancelButtonColor: '#F44336',
		  	confirmButtonText: '<i class="zmdi zmdi-run"></i> Yes, Exit!',
		  	cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancel!'
		}).then(function () {
			window.location.href="/logincreadopormi";//redirigir
		});
	});
	$('.btn-menu-dashboard').on('click', function(){
        var overlay=$('.overlay')
		var body=$('.dashboard-contentPage');
		var sidebar=$('.dashboard-sideBar');
		if(sidebar.css('pointer-events')=='none'){
            overlay.removeClass('overlaymas');

			body.removeClass('no-paddin-left');
			sidebar.removeClass('hide-sidebar').addClass('show-sidebar');
		}else{
            overlay.addClass('overlaymas');

			body.addClass('no-paddin-left');
			sidebar.addClass('hide-sidebar').removeClass('show-sidebar');
		}
	});
	$('.btn-Notifications-area').on('click', function(){
		var NotificationsArea=$('.Notifications-area');
		if(NotificationsArea.css('opacity')=="0"){
			NotificationsArea.addClass('show-Notification-area');
		}else{
			NotificationsArea.removeClass('show-Notification-area');
		}
	});
	$('.btn-search').on('click', function(){
		swal({
		  title: 'What are you looking for?',
		  confirmButtonText: '<i class="zmdi zmdi-search"></i>  Search',
		  confirmButtonColor: '#03A9F4',
		  showCancelButton: true,
		  cancelButtonColor: '#F44336',
		  cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> Cancel',
		  html: '<div class="form-group label-floating">'+
			  		'<label class="control-label" for="InputSearch">write here</label>'+
			  		'<input class="form-control" id="InputSearch" type="text">'+
				'</div>'
		}).then(function () {
		  swal(
		    'You wrote',
		    ''+$('#InputSearch').val()+'',
		    'success'
		  )
		});
	});
	$('.btn-modal-help').on('click', function(){
		$('#Dialog-Help').modal('show');
	});
});
(function($){
    $(window).on("load",function(){
        $(".dashboard-sideBar-ct").mCustomScrollbar({
        	theme:"light-thin",
        	scrollbarPosition: "inside",
        	autoHideScrollbar: true,
        	scrollButtons: {enable: true}
        });
        $(".dashboard-contentPage, .Notifications-body").mCustomScrollbar({
        	theme:"dark-thin",
        	scrollbarPosition: "inside",
        	autoHideScrollbar: true,
        	scrollButtons: {enable: true}
        });
    });
})(jQuery);

$('.Eliminar').submit('click', function(e){
    e.preventDefault();
    swal({
          title: '¿Esta seguro que desea eliminar?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#03A9F4',
          cancelButtonColor: '#F44336',
          confirmButtonText: '<i class="zmdi zmdi-run"></i> SI',
          cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> NO!'
    }).then((r) => {
        if (r) {
          this.submit()
        }
    })
});

function ventanaemergente(){
/*======= form emerge*/
const overlay = document.getElementById("overlay"),
overlayparcialUno=document.getElementById('overlayparcialUno'),
overlayparcialDos=document.getElementById('overlayparcialDos')

//popus
const popup = document.getElementById("popup"),
popup2 = document.getElementById("popup2"),
popup3 = document.getElementById("popup3")
//botones
var btnCerrarPopup = document.querySelectorAll('.btn-cerrar-popup')
const btnAbrirPopup = document.querySelector("#edit"),
parcialUno = document.querySelector("#parcialUno"),
parcialDos = document.querySelector("#parcialDos")

//boton eliminar
btnCerrarPopup.forEach(e=>{
        e.addEventListener("click", function(){
        overlay.classList.remove("active");
        overlayparcialUno.classList.remove("active");
        overlayparcialDos.classList.remove("active");
        popup.classList.remove("active");
        popup2.classList.remove("active");
        popup3.classList.remove("active");
        });
})

//eventos
    btnAbrirPopup.addEventListener("click", function(){
        overlay.classList.add("active");
        popup.classList.add("active");
	});

    parcialUno.addEventListener("click", function(){
        overlayparcialUno.classList.add("active");
        popup2.classList.add("active");
	});

    parcialDos.addEventListener("click", function(){
        overlayparcialDos.classList.add("active");
        popup3.classList.add("active");
	});

}

let inputsespacio=document.getElementById('imputs')
let selector=document.getElementById('selector')
let inputsespacio2=document.getElementById('imputs2')
let selector2=document.getElementById('selector2')
let imputFecha='<div class="form-group"><label class="control-label">Fecha de entrega</label><input class="form-control" type="date"></div>'
let imputFile='<div class="form-group"><div><input type="text" readonly="" class="form-control" placeholder="Archivo..."><input type="file"  ></div></div>'

selector.addEventListener('change',(e)=>{
    let campo=e.target.value
    if(campo==""){
        inputsespacio.innerHTML=""
    }else if(campo=='recursos'){
        inputsespacio.innerHTML=imputFile
    }else{
        inputsespacio.innerHTML=imputFecha
    }
    console.log(campo)
})

selector2.addEventListener('change',(e)=>{
    let campo=e.target.value
    if(campo==""){
        inputsespacio2.innerHTML=""
    }else if(campo=='recursos'){
        inputsespacio2.innerHTML=imputFile
    }else{
        inputsespacio2.innerHTML=imputFecha
    }
    console.log(campo)
})
