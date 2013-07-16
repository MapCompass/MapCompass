<?php
    $connection = mysql_connect("localhost","root","");
    if(!$connection)
    {
        die("Database connection failed cc: ".mysql_error());
    }
    $db = mysql_select_db('MC',$connection);
    if(!$db)
    {
        die("Database connection faileddd : ".mysql_error());   
    }
?>
