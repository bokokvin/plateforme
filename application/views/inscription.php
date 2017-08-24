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

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <img class="masthead-brand" src="../../assets/images/logo2.0.png" style="width:200px; height: 50px; margin-top: -2%;">
              <nav>
                <ul class="nav masthead-nav" style="margin-right: -22%">
                  <li><?php echo anchor('user/home','Home'); ?></li>
                  <li class="active"><?php echo anchor('user/inscription','Inscription'); ?></li>
				  <li><?php echo anchor('user/connexion','Connexion'); ?></li>
				  <li><a href="#">Législation</a></li>
                  <li><a href="#">A propos</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <div class="w3-card-4" style="background-color: white;">
				<header class="w3-container w3-light-blue">
					<h2 style="color: white">Inscription</h2>
				</header>
				<div class="w3-container">
					<form id="inscription" name="inscription" method="POST">
					
						<input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom (au mons 2 caractères)" value="<?php echo set_value('nom'); ?>" onkeyup="vnom()" required>
						<input type="text" id="prenom" name="prenom" class="form-control" placeholder="Votre prénom (au mons 2 caractères)" value="<?php echo set_value('prenom'); ?>" onkeyup="vprenom()" required>
						<input type="email" id="email" name="email" class="form-control" placeholder="Adresse mail" value="<?php echo set_value('email'); ?>" onkeyup="vemail()" required>
						<!--input type="radio" id="ch1" name="type" class="radio-inline" value="etudiant" onclick="showCne();" checked> Etudiant
						<input type="radio" id="ch2" name="type" class="radio-inline" value="enseignant" onclick="hideCne();"-->
						<input type="password" id="m2p" name="m2p" class="form-control" placeholder="Mot de passe (au moins 4 caractères)" onkeyup="vpass()" required>
						<input type="password" id="m2pConfirm" name="m2pConfirm" class="form-control" placeholder="Confirmation" onkeyup="vpassc()" required>
						<input type="submit" id="btInscription" name="btInscription" class="w3-btn w3-light-blue" value="Inscription">
						<button type="reset" id="btReset" class="w3-btn w3-light-blue">Annuler</button>
					</form>
				</div>
			</div><br><br>
			<?php echo form_error('nom'); ?>
			<?php echo form_error('prenom'); ?>
			<?php echo form_error('email'); ?>
			<?php echo form_error('m2p'); ?>
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
