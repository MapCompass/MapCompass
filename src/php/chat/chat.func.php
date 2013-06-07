<?php
    session_start();
?>
<?php
$group_id = $_SESSION['groupid'];

	function get_msg() {
		
		$query = "SELECT `Sender`, `Message` FROM `chat`.`chat` WHERE `group_id`= '".$_SESSION['groupid']."' ORDER BY `Msg_ID` DESC";
		
		$run = mysql_query($query);
		
		$messages = array();
		
		while($message = mysql_fetch_assoc($run)) {
			$messages[] = array('sender'=>$message['Sender'],
								'message'=>$message['Message'],
								'group_id'=>$message['group_id']);
		}
		
		return $messages;
		
	}
	
	function send_msg($message) {
		
		if(!empty($message)) {
			$message 	= mysql_real_escape_string($message);
			
			$query = "INSERT INTO `chat`.`chat` VALUES (null, '".$_SESSION['groupid']."' ,	'".$_SESSION['name']."', '$message')";
			
			if($run = mysql_query($query)) {
				return true;
			} else {
				return false;
			}
			
		} else {
			return false;
		}
	}

?>
