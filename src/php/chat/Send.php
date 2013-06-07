<?php
	require('connect.db.php');
	require('chat.func.php');

		if(isset($_GET['message'])&&!empty($_GET['message'])) {
			$message = $_GET['message'];
			
			if(send_msg($message)) {
				echo 'Message Sent';
			} else {
				echo 'Message wasn\'t sent';
			}
			
		} else {
			echo 'No Message was entered';
		}
?>