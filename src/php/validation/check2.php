<?php

$name = $_POST['name'];
$group = $_POST['groupid'];
    $connection = mysql_connect("localhost","root","");
    if(!$connection)
    {
        die("Database connection failed cc: ".mysql_error());
    }
    $db = mysql_select_db('MYF',$connection);
    if(!$db)
    {
        die("Database connection faileddd : ".mysql_error());   
    }
        $query = "SELECT * FROM `users` where group_id = '".$group."' and name='".$name."' ";
        $result=mysql_query($query);
        if ( mysql_num_rows($result) ){
        	echo "1";
        }
        else echo "0";
        


?>    