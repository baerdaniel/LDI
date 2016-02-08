$(document).ready(function(){


	var divHeight = $('#header').height(); 
		$('#main').css('margin-top', divHeight+'px');
		$('#statement').css('margin-top', divHeight+'px');
	var divHeight = $('#statement').height(); 
		$('#main-blckr').css('height', divHeight+'px');
	var divHeight = $('#footer').height(); 
		$('#main').css('margin-bottom', divHeight+'px');


	$("#menu-item-957").click(function () {
		$("#newsletter").fadeToggle(500);
		$("#contact").fadeOut(500);
		$("#menu-item-958").removeClass('active');
		$(this).toggleClass('active');
	});
	$("#menu-item-958").click(function () {
		$("#contact").fadeToggle(500);
		$("#newsletter").fadeOut(500);
		$("#menu-item-957").removeClass('active');
		$(this).toggleClass('active');
	});
	$("#contact .close").click(function () {
		$("#contact").fadeOut(500);
		$("#menu-item-958").removeClass('active');
	});
	$("#newsletter .close").click(function () {
		$("#newsletter").fadeOut(500);
		$("#menu-item-957").removeClass('active');
	});

	lightbox.option({
      'resizeDuration': 400,
      'wrapAround': true
    })

});


// Parallax Effect Gallery

$(window).scroll(function () {
  var sT      = $(window).scrollTop();
  var dH      = $(document).height();
  var addTop  = - sT/2;
  var gallery = '.gallery';

  $(gallery).css('top', addTop + 'px');
});
















