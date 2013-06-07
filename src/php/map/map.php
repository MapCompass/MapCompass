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

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../../css/alertify.core.css" rel="stylesheet">
    <link href="../../css/alertify.default.css" rel="stylesheet">    
    <link type="text/css" rel="stylesheet" href="../../css/main.css" />
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap-transition.js"></script>
    <script src="../../js/bootstrap-collapse.js"></script>
    <script src="../../js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="../../js/ajaxupload.js"></script>
    <script src="../../js/alertify.min.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.5/leaflet.js"></script>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5/leaflet.css" />    
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link"><?php echo $_SESSION['name'];?></a>
            </p>
            <ul class="nav">
                                        <li class="active"><a href="http://localhost/Map-your-friend">Welcome to Map Your Friend</a></li>
                          <li><a><?php echo $_SESSION['name'];?></a></li>
                          <li><a href="#newuser" data-toggle="modal" role="btn"b>Add a new user</a></li>
                          <li><a href="javascript:button1()">Refresh</a></li>
                          <li><a class="pull-right" id="logout">Log Out</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <img src="../../../res/usr_img/<?php echo $_SESSION['groupid'].'/'.$_SESSION['name'].'_'.$_SESSION['groupid'].'.jpg'; ?> "></img>
          <ul class="nav nav-pills nav-stacked">
          <li><a href="#changepic" data-toggle="modal" data-target="#changepic">Change pic</a> </li>
          <li><a href="#">Second</a> </li>
          <li><a href="#">Third</a> </li>
        </ul>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span8">

         <div id="map"></div>
         <script type="text/javascript">
  //Basic bMap setup...

    navigator.geolocation.watchPosition(success,error);
    function success(position) {
      lat = position.coords.latitude;    //Get the Latitude and Longitude of the user
      lng = position.coords.longitude;
      console.log('hello'+lat+lng);

var map = L.map('map').setView([lat, lng], 12);
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        maxZoom: 18,            
        attribution: ''
        }).addTo(map);
var marker = new Array();

    $.getJSON("db.php?name=<?php echo $_SESSION['name'];?>&groupid=<?php echo $_SESSION['groupid'];?>&lat="+lat+"&lng="+lng, function(data) {
        var i=1;
        $.each(data, function(index,row){
                    $('#list').append(i+"."+row.name+"<br/ >");
                    marker[i]=L.marker([row.lat, row.lng]).addTo(map);
                    marker[i].bindPopup("<b>"+row.name+"</b><br><img src=\"../../../res/usr_img/<?php echo $_SESSION['groupid']?>/<?php echo $_SESSION['groupid']?>_"+row.name+".jpg\" height='50px' width='50px'>");
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
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

<?php include '../picture/pic_modal.php';?>

<?php include('geodata.php');?>

<div id="messages"></div><!-- Messages -->
  <div id="input">
    <div id="feedback"></div>
      <form action="#" method="post" id="form_input">
        <br /><lable>Enter Message:<br /><textarea id="message" cols="25" rows="4"></textarea></lable><br />
        <input type="submit" name="send" id="send" value="Send Message"/>
      </form>
    </div><!-- Input -->
      <script type="text/javascript" src="../../js/auto_chat.js"></script>
      <script type="text/javascript" src="../../js/send.js"></script>
  </div>
</div>

</div>

</body>
</html>
