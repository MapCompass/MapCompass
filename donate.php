<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MapCompass</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <META NAME="KEYWORDS" CONTENT="mapcompass,,how to locate my friend">
        <META NAME="DESCRIPTION" CONTENT="This app lets you locate your friends online and communicate to each other.">
        <META HTTP-EQUIV="CONTENT-LANGUAGE" CONTENT="EN">
        <META NAME="Author" CONTENT="Abhiram">

        <META NAME="Copyright" CONTENT="copyright">
        <!-- MetaTags http://mapcompass.org/ -->
        <!-- This app lets you locate your friends online and communicate to each other. -->
        <link href="src/css/bootstrap1.css" rel="stylesheet">
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
                <a href="index.php" ><img src="res/img/Black_and_white_223x75.png" class="img-rounded"></a>
                <ul class="nav nav-pills pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Get Involved <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="contribute_code.php">Contribute Code</a></li>
                            <li><a href="#">Donate</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

 
            <div class="jumbotron">
          <h2 class="text-info">Help MapCompass</h2>
        <p class="text-success">Help MapCompass team to build and grow stronger.</p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="abhiram.ampabathina@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="MapCompass">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
      </div>

<div class="row-fluid">
        <div class="span4">
          <h2 class="text-warning">Infrastructure</h2>
          <p class="muted"> We are a bit low on infrastructure like server space. Help us to survive to grow stronger. </p>
        </div>
        <div class="span4">
          <h2 class="text-error">Strong map</h2>
          <p class="muted">Help us to make the app more stronger and stronger. Your contribution will help us to contribute back to the OSM maps we are using, so that they never crash in our app.</p>
        </div>
        <div class="span4">
          <h2 style="color:#FFDBE7">Love</h2>
          <p class="muted">Lastly, help us to spread the love of MapCampus. Share this super app with your friends and family.</p>
        </div>
      </div>

            </div>
            <div class="footer">
                <center> <p>&copy; Company 2012</p> </center>
            </div> 
        </div> <!-- /container -->

        <script src="src/js/jquery.js"></script>
        <script src="src/js/bootstrap-dropdown.js"></script>
        <script src="src/js/bootstrap-carousel.js"></script>
        <script src="src/js/bootstrap-transition.js"></script>
        <script src="src/js/bootstrap-modal.js"></script>
    	<script src="src/js/alertify.min.js"></script>
        <script src="src/js/script.js"></script>
        <script src="src/js/validate.js"></script>
        <script src="http://vjs.zencdn.net/c/video.js"></script>
    </body>
</html>
