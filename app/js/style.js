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
	// if ($("#main").height() > (bodyH - 200)) {
	// 	$("#main, footer").addClass('static');
	// } else {
	// 	$("#main, footer").removeClass('static');
	// }
}

$("#about-link").click(function() {
	$("#wrapper").toggleClass("left");
	$("#about").toggleClass("left");
});

$("#about-close").click(function() {
	$("#wrapper").removeClass("left");
	$("#about").removeClass("left");
});

/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
// PAGE TRANSITION
$(document).ready(function(){
    $(window).load(function() {
      $('#loader').addClass('loaded');
    });

    // remove loading page after 6secs
    setTimeout(function(){
      $('#loader').addClass('loaded');
    }, 6000);
})
// to fade out before redirect
$(document.body).on('click', 'a[href*="/"]:not([href^="mailto"], [target="_blank"], [href^="#"], [href=""])' ,function(e){
    e.preventDefault();
    redirect = $(this).attr('href');
    $('#unloader').addClass('unload');
    setTimeout('document.location.href = redirect',800);
});
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
// show title field if 
$("#form-message").keyup(function() {
 	console.log($(this).val().length);
 	if ($(this).val().length > 140) {
 		$('#conditional').addClass('show');
 	} else {
 		$('#conditional').removeClass('show');
 	}
});
$("#form-title").keyup(function() {
	console.log($(this).val().length);
	$('#conditional .count').text($(this).val().length);
	if ($(this).val().length > 140) {
		$('#conditional').addClass('error');
	} else {
		$('#conditional').removeClass('error');
	}
});
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
// error checking
$("#").click(function() {

});
