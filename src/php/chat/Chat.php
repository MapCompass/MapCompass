<?php
	require('connect.db.php');
	require('chat.func.php');
	
	$messages = get_msg();
			foreach($messages as $message) {
				echo '<strong>'.$message['sender'].' Sent</strong><br />';
				echo $message['message'].'<br /><br />';
			}
	

?>