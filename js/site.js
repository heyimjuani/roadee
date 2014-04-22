$(document).ready(function() {
	$("#subscribe").submit( function(e) {
		var emailField = $("#emailField").val();
		$.post( "email.php", {emailfield: emailField}).done(function( data ) {
  			var data = $.parseJSON(data);
  			console.log(data);

  			if (data.success === true) {
  				$("#hero article").addClass("sent");
  			}
		});
		ga("send", "event", "acquisition", "left-email", "emailAddress", emailField);
		e.preventDefault();
	});

	$("#searchform").submit(function(e){
		window.location.href = "single.html";
		e.preventDefault();
	});

	$("#sidebar .dd-toggle").on("click", function() {
		$(this).siblings(".dropdown").fadeToggle();

		return false;
	});

	$("#vehicle-content .tabbed a").on("click", function(){
		var target = $(this).attr("rel");

		$("body").find("article").removeClass("active");
		$("body").find("article#" + target).addClass("active");

		$(this).parent().siblings().removeClass("active");
		$(this).parent().addClass("active");

		return false;
	});

	$(".btn-more").on("click", function(){
		$('html, body').stop().animate({
	        'scrollTop': $("#what").offset().top
	    }, 1000);
	});

	$(".toggle-nav").on("click", function() {
		$(this).parent().toggleClass("active");

		return false;
	});
});