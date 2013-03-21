var unclearText ="";
var $this;

$('#unclear').focus(function(){
	$('#clear').select();
});

$('#clear').keydown(function(e){
	var $this;

	if(e.which == 8){
		$this = $('#unclear').val();
		$('#unclear').val($this.substring(0,$this.length - 1));
		unclearText = $('#unclear').val();
	}
	else if (e.which == 13) {
		$('#unclear').val(unclearText + '\n');
		unclearText = $('#unclear').val();
	}
	else{
		$('#unclear').val(unclearText + '•');
		unclearText = $('#unclear').val();
	};
});