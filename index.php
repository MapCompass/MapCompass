<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Map Your Friend</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <META NAME="KEYWORDS" CONTENT="mapyourfriend,myf,how to locate my friend">
        <META NAME="DESCRIPTION" CONTENT="This app lets you locate your friends online and communicate to each other.">
        <META HTTP-EQUIV="CONTENT-LANGUAGE" CONTENT="EN">
        <META NAME="Author" CONTENT="Abhiram">
        <META NAME="Author" CONTENT="Bharath">
        <META NAME="Copyright" CONTENT="copyright">
        <!-- MetaTags http://myf.webuda.com/ -->
        <!-- This app lets you locate your friends online and communicate to each other. -->
        <link href="src/css/bootstrap.css" rel="stylesheet">
        <link href="src/css/style.css" rel="stylesheet">
        <link href="src/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="src/css/alertify.core.css" rel="stylesheet">
        <link href="src/css/alertify.default.css" rel="stylesheet">
        <link rel="shortcut icon" href="res/ico/new_logo_favicon_2.png">
        <link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">

    </head>

    <body>
        <div class="container-narrow">
            <div class="masthead">
                <a href="" ><img src="res/img/Black_and_white_223x75.png" class="img-rounded"></a>
                <ul class="nav nav-pills pull-right">
                    <li class=""><a href="">Home</a></li>
                    <li><a href="">About app</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Get Involved <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Feature request</a></li>
                            <li><a href="#">Donate</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

 
            <div id="dialogBox" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="dialogBoxLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="dialogBoxLabel">Create a Group</h3>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <p>Your group ID details will be mailed to you. Create your group below.</p>
		        <label for="nickname">Nickname:</label><input type="text" id="nickname" name="nickname" placeholder="Enter your nickname" onkeyup="check_nickname()"/><div id="area3"></div>
		        <label for="group">Group Name:</label><input type="text" id="group" name="group" placeholder="Enter your Group Name" onkeyup="check_group_validate()"/><div id="area2"></div>
		        <label for="email">Email:</label><input type="email" id="email" name="email" placeholder="Enter the Email ID" onkeyup="check_email()"/><div id="area4"></div>
		    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                        <input type="submit" id="create_btn" class="btn btn-primary" value="Create" disabled/>
                    </div>
                </form>
            </div>

            <div id="joinBox" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="joinBoxLabel" aria-hidden="true">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="joinBoxLabel">Join</h3>
                </div>
                <div class="modal-body">
                    <p>Specify your group ID here and your nickname.</p>
                    <form method="POST" action="src/php/map/map.php">
                        <label for="groupid">Groupid:</label>
                        <input type="text" id="groupid" name="groupid" placeholder="Enter the group id provided" onkeyup="func_group()"/><div id="area"></div>
                        <label for="name">Username:</label>
                        <input type="text" id="name" name="name" placeholder="Enter the username" onkeyup="func_nick()"/ ><div id="area1"></div>
                    
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-primary" id="join_submit_btn" type="submit" disabled>Join</button>
                </div>
                    </form>
            </div>
             <div class="jumbotron">
                <video id="example_video_1" class="video-js vjs-default-skin"
                    controls preload="auto" width="480" height="270"
                    data-setup='{"example_option":true}'>
                <source src="res/video/myf.mp4" type='video/mp4' />
            </div>
            <div class="jumbotron">
                <button class="btn btn-large btn-success" id="createGroup" data-toggle="modal" data-target="#dialogBox">Create a group</button>
                <button class="btn-large btn" id="joinGroup" data-toggle="modal" data-target="#joinBox">Join a Group</button>
            </div>
            <div class="footer">
                <center> <p>&copy; Company 2012</p> </center>
            </div> 
        </div> <!-- /container -->

        <script src="src/js/jquery.js"></script>
        <?php
            if(!empty($_SESSION['name'])){
                ?>
                <script>
                $('#createGroup').attr('disabled',true);
                $('#joinGroup').click(function(){
                    window.location.replace("http://localhost/Map-your-friend/src/php/map/map.php");
                });
                </script><?php
            }
        ?>
        <script src="src/js/bootstrap-dropdown.js"></script>
        <script src="src/js/bootstrap-carousel.js"></script>
        <script src="src/js/bootstrap-transition.js"></script>
        <script src="src/js/bootstrap-modal.js"></script>
    	<script src="src/js/alertify.min.js"></script>
        <script src="src/js/script.js"></script>
        <script src="src/js/validate.js"></script>
        <script src="http://vjs.zencdn.net/c/video.js"></script>
<script type="text/javascript">
  // Once the video is ready
  _V_("example_video_1").ready(function(){

    var myPlayer = this;    // Store the video object
    var aspectRatio = 9/16; // Make up an aspect ratio

    function resizeVideoJS(){
      // Get the parent element's actual width
      var width = document.getElementById(myPlayer.id).parentElement.offsetWidth;
      // Set width to fill parent element, Set height
      myPlayer.width(width).height( width * aspectRatio );
    }

    resizeVideoJS(); // Initialize the function
    window.onresize = resizeVideoJS; // Call the function on resize
  });
</script>
    </body>
</html>
