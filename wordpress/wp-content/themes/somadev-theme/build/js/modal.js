$( document ).ready(function() {

	$("body").on("click", ".item-search-js", function(event) {
		event.preventDefault();
		$(".bg-modal, .modal").fadeIn();
		$(".bg-modal").addClass("effect");
		setFocus();
	});

	function closeModal() {
		setTimeout(function(){
			$(".bg-modal, .modal").fadeOut();
		}, 400);
		$(".bg-modal").removeClass("effect");
	}

	$("body").on("click", ".close-modal, .bg-modal", function(){
        closeModal();
    });

	$(document).keyup(function(event){
	    if(event.which=='27'){
	        closeModal();
	    }
	});

	function setFocus() {
	    var editor = $('.modal-search form input[type="text');
	    var value = editor.val();
	    editor.val("");
	    editor.focus();
	    editor.val(value);
	}


});

