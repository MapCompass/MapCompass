<?php
include('../database.php');
$group = $_POST['group'];
if(isset($_POST['email'])){
    $email = $_POST['email'];
    validateGroupAndEmail($group,$email);
}
else{
    validateGroup($group);
}
function validateGroup($group){
    if ($group=="") {
        echo "2";
    }
    else {
        $query = "SELECT * FROM `users` where group_name = '".$group."' ";
        $result=mysql_query($query);
        if ( mysql_num_rows($result) ){
            echo "1";
        }
        else echo "0";
    }
}
function validateGroupAndEmail($group,$email){
    if ($group=="") {
        echo "2";
    }
    else {
        $query1 = "SELECT * FROM `users` where group_name = '".$group."' ";
        $query2 = "SELECT * FROM `users` where email = '".$email."' and admin = '1' ";
        $result1=mysql_query($query1);
        $result2=mysql_query($query2);
        if( mysql_num_rows($result2)){
            echo "3";
        }
        else if ( mysql_num_rows($result1) ){
            echo "1";
        }
        else echo "0";
    }
    
}
?>    