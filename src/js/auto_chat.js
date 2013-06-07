$(document).ready(function() {
	var interval = setInterval(function() {
		$.ajax({
			url: '../chat/Chat.php',
			success: function(data) {
				$('#messages').html(data);
			}
		});
	}, 1000);
});