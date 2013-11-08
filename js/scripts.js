function stoppedTyping(){
	if($("textarea#content").val().length > 0) {
		$("#submit-post").removeAttr("disabled");
	} else { 
		$("#submit-post").attr("disabled", "disabled");
	}
}