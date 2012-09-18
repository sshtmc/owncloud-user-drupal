$(document).ready(function(){
	$('#drupal #identity').blur(function(event){
		event.preventDefault();
		OC.msg.startSaving('#drupal .msg');
		var post = $( "#drupal" ).serialize();
		$.post( 'ajax/drupal.php', post, function(data){
			OC.msg.finishedSaving('#drupal .msg', data);
		});
	});
});
