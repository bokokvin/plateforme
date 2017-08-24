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

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <img class="masthead-brand" src="../../assets/images/logo2.0.png" style="width:200px; height: 50px; margin-top: -2%;">
              <nav>
                <ul class="nav masthead-nav" style="margin-right: -22%">
                  <li class="active"><?php echo anchor('user/home','Home'); ?></li>
                  <li><?php echo anchor('user/inscription','Inscription'); ?></li>
				  <li><?php echo anchor('user/connexion','Connexion'); ?></li>
				  <li><a href="#">Législation</a></li>
                  <li><a href="#">A propos</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading" style="color: white">MorEMF</h1>
            <p class="lead" style="color: white">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Voir les résultats</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p><a href="#">Contact</a>, <a href="#">Conditions d'utlisations</a></p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo js_url('jquery-2.1.4.min');?>"></script>
	<script src="<?php echo js_url('bootstrap.min');?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
