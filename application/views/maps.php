<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="OGOUTCHORO Florent & BOKO Kévin">
    <!--link rel="icon" href="../../favicon.ico"-->

    <title>Home | MorEMF</title>

    <!-- Bootstrap core CSS -->
	<link href="<?php echo css_url('bootstrap.min');?>" rel="stylesheet">
	<link href="<?php echo css_url('w3');?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo css_url('cover');?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--script src="../../assets/js/ie-emulation-modes-warning.js"></script-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    
    <input type="file" id="chooseFile">
    <button id="theBt" onclick="getMarkers()">Lancer!</button>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo js_url('jquery-2.1.4.min');?>"></script>
	<script src="<?php echo js_url('bootstrap.min');?>"></script>
    <script src="<?php echo js_url('jquery.csv.min');?>"></script>
    <script src="<?php echo js_url('maps');?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>