$(document).ready(function() {
	$('li.dropdown > a.dropdown-toggle').attr('data-toggle', 'none');
	
	$(function() {
	  $('.navbar-nav a').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html, body').animate({
			  scrollTop: target.offset().top - 32
			}, 1000);
			return false;
		  }
		}
	  });
	});
});