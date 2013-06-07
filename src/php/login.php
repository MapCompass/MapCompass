<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<script src="src/js/jquery.js"></script>
<script src="src/js/validate.js"></script>
  
<?php
$code =$_GET['code'];

if( !empty($_SESSION['name'])&& !empty($_SESSION['groupid']) ){
?>
<script>
window.location.replace("http://localhost/Map-your-friend/src/php/map/map.php");
</script>
<?php
}
else {
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="src/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="src/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

      </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="src/php/map/map.php">
        <h2 class="form-signin-heading">Nick please!</h2>
        <input class="input-block-level" type="text" placeholder="Nickname" id="name" name="name" onkeyup="func_nick()"><div id="area1"></div>
        <input type="hidden" id="groupid" value="<?php echo $code; ?>" name="groupid">
        <button class="btn btn-large btn-primary" type="submit" id="join_submit_btn" disabled>Join</button>
      </form>

    </div> 


    
  </body>
</html>
<?php

}
?>