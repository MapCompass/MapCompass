<?php
if(isset($_POST['name'])&&isset($_POST['groupid'])&&isset($_POST['nickname'])&&isset($_POST['email'])){
    include('../database.php');
    $name = $_POST['name'];
    $groupid = $_POST['groupid'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $result = mysql_query("select group_name from users where group_id='".$groupid."'");
    $row = mysql_fetch_array($result);
    $groupname = $row['group_name'];
    $result = mysql_query("INSERT INTO `MYF`.`users` (`group_id`, `group_name`, `name`,`email`, `latitude`, `longitude`) VALUES ('".$groupid."','".$groupname."','".$nickname."','".$email."', '1000', '1000')");
    echo "SUCCESS";
    
}
?>