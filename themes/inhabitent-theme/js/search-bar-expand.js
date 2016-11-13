	
(function($){


$('.search-show').on('click', function(event){
	event.preventDefault();
	// When this button is clicked the width will show up
	$('input[type=search]').animate({width: 'toggle'});
	// Right after it shows it will force you to focus onto it.
	$('input[type=search]').focus();

	
})

$('input[type=search').focusout(function(){
	// This os so when you focus off of it it will make it disapear again.
	$('input[type=search]').animate({width: 'toggle'});
});


})(jQuery);