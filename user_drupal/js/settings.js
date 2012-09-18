$(document).ready(function(){
	$('#drupalform #identity').blur(function(event){
		event.preventDefault();
		OC.msg.startSaving('#drupalform .msg');
		var post = $( "#drupalform" ).serialize();
		$.post( 'ajax/drupal.php', post, function(data){
			OC.msg.finishedSaving('#drupalform .msg', data);
		});
	});
});
