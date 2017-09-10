$(document).ready(function () {
	$('.quantite').focusout(function () {
		var input = $(this).val();
		var isNumber = !isNaN(parseInt(input)); // teste si il s'agit d'un nombre (boolean)
		if(input != '' && isNumber){
			$(this).parent().parent().parent().parent().css('border-left', '10px solid green');
		} else if(input == ''){
			$(this).parent().parent().parent().parent().css('border-left', '10px solid grey');
		} else {
			$(this).parent().parent().parent().parent().css('border-left', '10px solid red');
		}
	});
	$('.article-inventaire').click(function () {
		// focus dans l'input
	});
});