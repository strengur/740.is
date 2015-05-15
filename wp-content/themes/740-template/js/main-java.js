// Function to fade top menu to dark smoothlie at sudden point
window.onscroll = menuToDark;

function menuToDark () {
 if (window.pageYOffset > 173) {
	 $(".menu-items").css("background-color", "#222").css("transition-duration", "1s");
	 } else {
		 $(".menu-items").css("background-color", "rgba(255,255,255,0.3)");
	 }
}


// Make "Welcom message" disappear and contact form appear at same time

$("#display-contact-form").click(function() {
	$(".landing-welcome").fadeOut(1500);
	$(".landing-contact").fadeIn(1500);
});




// Function to move up/down the page more smoothlie
/*
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
*/