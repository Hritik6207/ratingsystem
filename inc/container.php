<?php
$userName = '';
$show = '';
if(!empty($_SESSION['userid']) && $_SESSION['userid']) {
	$userName =  $_SESSION['username'];		
} else {
	$show = 'hidden';
}
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/rating.js"></script>
  </head>
  <body>
  <body class="" style="background-color: #F5F5F5;">
<div role="navigation" class="navbar navbar-default navbar-static-top" style="background-color: #181823;">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="navbar-collapse collapse <?php echo $show; ?>">
          <ul class="nav navbar-nav">
            <li class="active"><img src="rate.png" width=50px alt=""></li>
            <li class="active"><a href="index.php">Home</a></li>
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	<div class="container" style="min-height:500px;">
  
	<div class=''>
	</div>
  </body>
  
  <script src="js/login.js"></script>

  </html>