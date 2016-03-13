$(document).ready(function(){
	$('#formContact').submit(function(event){
		alert(5);
		$(this).serialize();
		event.preventDefault();
	});
});