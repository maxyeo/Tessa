$(document).ready(function() {  
	sizeitup();
});

$(window).resize(function() {
	sizeitup();
});
window.onload = function() {
	sizeitup();
};

function sizeitup() {
	var bodyH = $(window).height();
	if ($("#main").height() > (bodyH - 200)) {
		$("#main, footer").addClass('static');
	} else {
		$("#main, footer").removeClass('static');
	}
}

$("#about-link").click(function() {
	$("#wrapper").toggleClass("left");
	$("#about").toggleClass("left");
});

$("#about-close").click(function() {
	$("#wrapper").removeClass("left");
	$("#about").removeClass("left");
});