$(document).ready(function () {
	console.log('coucou');
	$('.quantite').focusout(function () {
		alert('coucou');
		if($(this).val() != ''){
			$(this).parent().parent().parent().parent().css('border-left', '10px solid #222');
		} 
	});
});