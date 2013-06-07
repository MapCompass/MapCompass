<?php
include('../database.php');
  if(isset($_GET['groupid'])&&($_GET['name'])&&isset($_GET['lat'])&&isset($_GET['lng']))
{

    mysql_query("UPDATE `users` SET  `lat` = '".$_GET['lat']."' , `lng` = '".$_GET['lng']."' WHERE `group_id`='".$_GET['groupid']."' AND `name` = '".$_GET['name']."' ");
    $query = "SELECT `lat`, `lng`, `name`, `group_id` FROM `users` WHERE `group_id`= '".$_GET['groupid']."' ";
    $to_encode = array(); 
    $result=mysql_query($query);
    while($row = mysql_fetch_assoc($result))
    {
        $to_encode[] = $row;
    }

    $json_object= json_encode($to_encode);
    echo $json_object;
}
?>
