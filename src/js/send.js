$('#form_input').submit(function() {
	var message = $('#message').val();
	var sender 	= $('#sender').val();
	
	$.ajax({
		url: '../chat/Send.php',
		data: { sender: sender, message: message }, 
		success: function(data) {
			$('#feedback').html(data);
			
				$('#feedback').fadeIn('fast', function() {
					$('#feedback').fadeOut(1000);
				});
				
			$('#message').val('');
			
		}
	});
	
	return false;
});