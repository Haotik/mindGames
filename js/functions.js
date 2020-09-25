function loadSelectGame(gameName){
	console.log(gameName);
	$('.gameLoadWindow').text('');
	$.ajax({
		type:"POST",
		data:"game="+gameName,
		dataType:"html",
		url: 'php/loadSelectGame.php',
		  	success: function(data){
			    $('.gameLoadWindow').html(data);
			}
	});
};

function shultceTables(){
		var counter = 0;
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

function anagramsLetterClick(){
	$('.letter').each(function (){
		$(this).click(function(){
			var data = $('#inputWordText').val() + $(this).text();
			$('#inputWordText').val(data);
		});
	});
};

function checkWordOnEnter(){
	$("#inputWordText").keyup(function(event){
    if(event.keyCode == 13){
       sendAjaxforAnagrams();
    }
});
};

function checkWord(){
	$('#checkWordVariant').click(function(){
		sendAjaxforAnagrams();
	});
};

function sendAjaxforAnagrams(){
	var checkWord = $('#inputWordText').val();
	$.ajax({
	    type: "POST",
	    data:"word=" +checkWord,
	 	url: 'php/anagramsSearchResult.php',
	  	success: function(data){
		    $('.ajaxResult').text(data);
		    $('#inputWordText').val('');
		}
	});
};