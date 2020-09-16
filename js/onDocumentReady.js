$(document).ready(function(){

	shultceTables();
	anagrams();
});

function shultceTables(){
		counter = 0;
		$('.number').each(function(){
			var cur_date = new Date();
			$(this).click(function(){
				var number = Number($(this).text()) - 1;
				if(number == counter){
					$(this).css('color','white');
			 		$(this).toggleClass('number numberClick');	
			 		counter++;
				} else {
					$(this).addClass('falseNumber');
					setTimeout(function (){
						$('.number').removeClass('falseNumber');
					},300);
				}
			if (counter == 24) {
				var end_date = new Date();
				alert ((end_date - cur_date)/1000 + "сек");
			}
			})
		})
	};

function anagrams(){
	$('.letter').each(function (){
		$(this).click(function(){
			var data = $('#inputWordText').val() + $(this).text();
			$('#inputWordText').val(data);
		});
	});
};