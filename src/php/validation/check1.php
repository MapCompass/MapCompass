<?php
if ( $_POST['name']=="" ){
$text2 = $_POST['groupid'];
$name = $_POST['name'];
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
        $query = "SELECT * FROM `users` where group_id = '".$text2."' ";
        $result=mysql_query($query);
        if ( mysql_num_rows($result) ){
        	echo "1";  
        }
        else echo "0";
}        

else {
$text2 = $_POST['groupid'];
$name = $_POST['name'];
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
        $query = "SELECT * FROM `users` where group_id = '".$text2."' and name = '".$name."'";
        $result=mysql_query($query);
        if ( mysql_num_rows($result) ){
            echo "2";  
        }
        else {
        $query = "SELECT * FROM `users` where group_id = '".$text2."' ";
        $result=mysql_query($query);
        if ( mysql_num_rows($result) ){
            echo "1";  
        }

        else echo "0";
        }



}
?>    