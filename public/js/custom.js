$(function() {
	
    "use strict";
	// REMOVE # FROM URL
	$( 'a[href="#"]' ).click( function(e) {
		e.preventDefault();
	});
	
	// CAMERA SLIDER
	$("#camera_wrap_1").camera({
		alignment: 'center',
		autoAdvance: false,
		mobileAutoAdvance: true,
		barDirection: 'leftToRight',
		barPosition: 'bottom',
		loader: 'none',
		opacityOnGrid: false, 
		cols: 12,
		height: '50%',
		playPause: false,
		pagination: false,
		imagePath: 'plugins/camera/images/'
	});
	
	// NEWS CAROUSEL
	$("#news-carousel, #comments-carousel").carousel({
		interval: false
	});
	
	// ACCORDION
	var $active = $("#accordion .panel-collapse.in, #accordion-faqs .panel-collapse.in")
					.prev()
					.addClass("active");
					
	$active
		.find("a")
		.append("<span class=\"fa fa-minus pull-right\"></span>");
		
	$("#accordion .panel-heading, #accordion-faqs .panel-heading")
		.not($active)
		.find('a')
		.prepend("<span class=\"fa fa-plus pull-right\"></span>");
	
	$("#accordion, #accordion-faqs").on("show.bs.collapse", function (e) {	
		$("#accordion .panel-heading.active")
			.removeClass("active")
			.find(".fa")
			.toggleClass("fa-plus fa-minus");				
		$(e.target)
			.prev()
			.addClass("active")
			.find(".fa")
			.toggleClass("fa-plus fa-minus");		
	});
	
	$("#accordion, #accordion-faqs").on("hide.bs.collapse", function (e) {
		$(e.target)
			.prev()
			.removeClass("active")
			.find(".fa")
			.removeClass("fa-minus")
			.addClass("fa-plus");
	});
	
	// DOCTORS FILTERS
	var $grid = $('#doctors-grid');
	$grid.shuffle({
		itemSelector: '.doctors-grid', // the selector for the items in the grid
		speed: 500 // Transition/animation speed (milliseconds)
	});
	/* reshuffle when user clicks a filter item */
	$('#doctors-filter li a').click(function (e) {
		// set active class
		$('#doctors-filter li a').removeClass('active');
		$(this).addClass('active');
		// get group name from clicked item
		var groupName = $(this).attr('data-group');
		// reshuffle grid
		$grid.shuffle('shuffle', groupName );
	});
	
	//MAGNIFIC POPUP
	$('.gallery-grid').magnificPopup({
		delegate: 'a.zoom', 
		type: 'image',
		gallery: {
			enabled: true
		}
	});
});

// key Google Maps == AIzaSyBP-gcDVPV_bpHHOqg9_10D7NFiadnGdxg


// trecho do link para o topo
jQuery(document).ready(function($){
  var offset = 300,
    offset_opacity = 1200,
    //duration of the top scrolling animation (in ms)
    scroll_top_duration = 700,
    //grab the "back to top" link
    $back_to_top = $('.to-top');

  //hide or show the "back to top" link
  $(window).scroll(function(){
    ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('to-is-visible') : $back_to_top.removeClass('to-is-visible to-fade-out');
    if( $(this).scrollTop() > offset_opacity ) {
      $back_to_top.addClass('to-fade-out');
    }
  });

  //smooth scroll to top
  $back_to_top.on('click', function(event){
    event.preventDefault();
    $('body,html').animate({
      scrollTop: 0 ,
      }, scroll_top_duration
    );
  });
});


// Configurações do calendario
$(function() {
    $( '#calendario' ).datepicker({
    	showOn: 'button',
        buttonImage: "../images/icons/calendario1.png",
        buttonImageOnly: true,
        dateFormat: 'dd-mm-yy',
        numberOfMonths: 3,
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });
});


// Calculo do IMC 
function  calcularIMC() {
  var peso = eval(document.form.peso.value)
  var alt = eval(document.form.alt.value)
  var alt2 = alt / 100
  var IMC = peso  / (alt2 * alt2)
  document.form.massacor.value=custRound(IMC,1);
if (document.form.massacor.value <18.5)
document.form.comment.value = "Peso Baixo";
if (document.form.massacor.value >=18.5 && document.form.massacor.value <=24.9)
document.form.comment.value = "Peso Ideal";
if (document.form.massacor.value >=25 && document.form.massacor.value <=29.9)
document.form.comment.value = "Acima do Peso";
if (document.form.massacor.value >=30 && document.form.massacor.value <=34.9)
document.form.comment.value = "Obesidade Tipo I";
if (document.form.massacor.value >=35 && document.form.massacor.value <=39.9)
document.form.comment.value = "Obesidade Tipo II";
if (document.form.massacor.value >=40 && document.form.massacor.value <=49.9)
document.form.comment.value = "Obesidade M?rbida";
if (document.form.massacor.value >40)
document.form.comment.value = "Obesidade Extrema";
}

function custRound(x,places) {
  return (Math.round(x*Math.pow(10,places)))/Math.pow(10,places)
}

/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('telefone').onkeypress = function(){
		mascara( this, mtel );
	}
}

function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}