<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <?php
  if(empty($_SESSION['name'])&&empty($_SESSION['groupid'])){
        $name = $_POST['name'];
        $groupid = $_POST['groupid'];
        $_SESSION['name'] = $name;
        $_SESSION['groupid'] = $groupid;
    }
  ?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../../css/modal.css" rel="stylesheet">
    <link href="../../css/input.css" rel="stylesheet">   
    <link href="../../css/btn.css" rel="stylesheet">
    <link href="../../css/bootstrap-modal.css" rel="stylesheet">   
    <link href="../../css/styles.css" rel="stylesheet">
<link rel="shortcut icon" href="../../../res/ico/new_logo_favicon_2.png">
    <link href="../../css/alertify.core.css" rel="stylesheet">
    <link href="../../css/alertify.default.css" rel="stylesheet">    
    <script src="../../js/jquery.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="../../js/bootstrap-transition.js"></script>
    <script src="../../js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="../../js/ajaxupload.js"></script>
    <script src="../../js/alertify.min.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.5/leaflet.js"></script>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5/leaflet.css" />      
</head>
<body>
<div id="topbar">
 <button class="btn-navbar1">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
  
<ul class="topbar">
      <li ><a href="../../../index.php">Home</a></li>
      <li><a><?php echo $_SESSION['name'];?></a></li>
      <li><a href="#newuser" data-toggle="modal" role="btn"b>Add new friend</a></li>
      <li><a href="#" onclick="button1()">Refresh</a></li>
      <li><a href="#" id="logout">Log Out</a></li>
<div class="usr"> Logged in as <?php echo $_SESSION['name'];?></div>
</ul>
<ul class="topbar1">
      <li ><a href="#">Home</a></li>
      <li><a><?php echo $_SESSION['name'];?></a></li>
      <li><a href="#newuser" data-toggle="modal" role="btn"b>Add new friend</a></li>
      <li><a href="#" onclick="button1()">Refresh</a></li>
      <li><a href="#" id="logout">Log Out</a></li>
<div class="usr"> Logged in as <?php echo $_SESSION['name'];?></div>
</ul>
</div>

<div class="well-span31">
<img src="../../../res/usr_img/<?php echo $_SESSION['groupid'].'/'.$_SESSION['name'].'_'.$_SESSION['groupid'].'.jpg'; ?> " ></img>
<ul>
  <li><a href="#myModal" role="button" class="" data-toggle="modal">Change Pic</a>
 </li>
  <li>Share on Facebook</li>
  <li>Follow us</li>
  <li>Spread the word</li>
</ul>
</div>
<div id="feedback1"></div>
<div class="well-span81" id="map">

</div>

<div class="well-span61">

  <div class="messages"></div>
  <div class="list"></div>

<form action="#" method="POST" id="form_input">
<input type="submit" class="sbt" value="send" name="send" id="send">
<input type="text" class="mess-txt" value="" id="message">
    <div id="feedback"></div>
</form>

<div style="display: block; clear: both;"></div>
</div>

</div>



<script>
    $(".btn-navbar1").click(function () {
      $(".topbar1").slideToggle("slow");
     });
//    $(".topbar").hide();
    
var map = L.map('map').setView([0, 0], 1);
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        maxZoom: 18,            
        attribution: ''
        }).addTo(map);
var marker = new Array();
    navigator.geolocation.watchPosition(success,error);
    function success(position) {
      lat = position.coords.latitude;    //Get the Latitude and Longitude of the user
      lng = position.coords.longitude;
      console.log('hello'+lat+lng);

    $.getJSON("db.php?name=<?php echo $_SESSION['name'];?>&groupid=<?php echo $_SESSION['groupid'];?>&lat="+lat+"&lng="+lng, function(data) {
        var i=1;
        $.each(data, function(index,row){
                    $('#list').append(i+"."+row.name+"<br/ >");
                    marker[i]=L.marker([row.lat, row.lng]).addTo(map);
                    marker[i].bindPopup("<b>"+row.name+"</b><br><img src=\"../../../res/usr_img/<?php echo $_SESSION['groupid']?>/"+row.name+"_<?php echo $_SESSION['groupid']?>.jpg\" height='50px' width='50px'>");
                    i = i+1; 
                });
    });
    } 
    
    function error(error){
    }
    


  function button1() {
      navigator.geolocation.getCurrentPosition(success,error);
      function success(position) {
      lat = position.coords.latitude;    //Get the Latitude and Longitude of the user
      lng = position.coords.longitude;
      console.log(''+lat+lng);
    $.getJSON("db.php?name=<?php echo $_SESSION['name'];?>&groupid=<?php echo $_SESSION['groupid'];?>&lat="+lat+"&lng="+lng, function(data) {
        var i=1;

        $.each(data, function(index,row){
            marker[i].setLatLng([row.lat, row.lng]);
            i = i+1; 
        });
});          
    
 }   
    function error(error){
    }

  }

</script>

  <?php include '../picture/pic_modal.php';?>

<?php include('geodata.php');?>


<!-- 
 <div id="messages"></div> Messages 
  <div id="input">
    <div id="feedback"></div>
      <form action="#" method="post" id="form_input">
        <br /><lable>Enter Message:<br /><textarea id="message" cols="25" rows="4"></textarea></lable><br />
        <input type="submit" name="send" id="send" value="Send Message"/>
      </form>
    </div>
 --> 
      <script type="text/javascript" src="../../js/auto_chat.js"></script>
      <script type="text/javascript" src="../../js/send.js"></script>
  
 
</body>
</html>