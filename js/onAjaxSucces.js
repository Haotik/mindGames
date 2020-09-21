var isLoad = false;
$(document).ajaxSuccess(function() {
	if (!isLoad) {
		isLoad = true;
		shultceTables();
		anagramsLetterClick();
		checkWord();
		checkWordOnEnter();
	}
});