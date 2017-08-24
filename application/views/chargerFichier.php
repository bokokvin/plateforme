<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Chargement du ficher</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Application MorEMF">
		<meta name="author" content="Florent Ogoutchoro & Boko Kévin">
		<!--Css-->
		<link href="<?php echo css_url('bootstrap.min');?>" rel="stylesheet">
		<link href="<?php echo css_url('w3');?>" rel="stylesheet">
	</head>
	<body id="body" style="background-color: #B3A78C">
		<div class="container">
			<div class="w3-card-2" style="margin-top:22%; margin-left: 25%; margin-right: 25%; width: auto; background-color: white;" >
				<header class="w3-container w3-blue">
					<h3 style="text-align: center">Charger un nouveau fichier</h3>
			
				</header>
				<div class="w3-container ">
					<?php echo form_open_multipart('traitement/nouveau');?><br />
						<input type="file" name="fichier" placeholder="Choisissez le fichier" class="form-control" required> <br>
						<input type="submit" class="btn btn-lg btn-default btn-block" name="charger" value="Charger" />
					</form>
				</div>
			</div>
		</div>
		
		<!-- Les Scripts -->
		<!-- Placé les script à la fin de la page permet un chargement plus rapide -->
		<script src="<?php echo js_url('jquery-2.1.4.min');?>"></script>
		<script src="<?php echo js_url('bootstrap.min');?>"></script>
		<!--script src="assets/js/jquery-2.1.4.min.js"></script-->
		<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->
		<!--script src="assets/js/bootstrap.min.js"></script-->
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
		<!--script src="assets/js/slideShow.js"></script-->
	</body>
</html>