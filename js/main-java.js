window.onscroll = scroll;

function scroll () {
 if (window.pageYOffset > 400) {
	 $("p").css("color", "red");
	 } else {
		 $("p").css("color", "#fff");
	 }
}

