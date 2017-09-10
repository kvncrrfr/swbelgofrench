$(document).ready(function () {
	if($('#inventaire').length != 0){
		$('footer').hide();
	}

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

	if($('.frame').length != 0){
		$('footer').hide();

		$('.list-group').click(function () {
			$('.frame .lot').css("border-color", "white");
			var elem = $(this).find($('.lot-badge>i'));
			$('.lot-badge>i.icofont-check-circled').removeClass("icofont-check-circled");
			$('.lot-badge>i').addClass("icofont-close-circled");
			if(elem.attr("class") == 'icofont icofont-close-circled'){
				elem.removeClass("icofont-close-circled");
				elem.addClass("icofont-check-circled");
			}
			$('.list-group>.lot').css('border-color', 'white');
			$(this).children().first().css('border-color', 'green');
		});
	}

	
});