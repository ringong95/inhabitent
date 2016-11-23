	
(function($){


$('.search-show').on('click', function(){
	// event.preventDefault();
	// When this button is clicked the width will show up
	$('#search-1').animate({width: 'toggle'});
	// Right after it shows it will force you to focus onto it.
	$('#search-1').focus();
})

$('#search-1').focusout(function(){
	// This os so when you focus off of it it will make it disapear again.
	$('#search-1').animate({width: 'toggle'});
});


})(jQuery);