$(document).ready(function(){
    
$('#menu').click(function() {
		$(".scroll").toggleClass("none");
		$(".container").toggleClass("change")
		});


});


$('.scroll').click(function() {
    $('body').animate({
        scrollTop: eval($('#' + $(this).attr('target')).offset().top)
    }, 1000);
});


$(document.body).click(function(e){
  	var $box = $('nav');
	if(e.target!== 'nav' && !$.contains($box[0], e.target) && !$(".scroll").hasClass("none") )
{
	$(".scroll").addClass("none");
	if ($(".container").hasClass("change")) {$(".container").removeClass("change")};
}

});

