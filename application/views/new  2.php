<?php
				$c = 0;
				echo '<ul id="liste">';
				for($i=0;$i<=count($projet)-1; $i++){
					$style = '';
					if($i==count($projet)-1){$style='style="margin-bottom: 2%;"';}else{$style='';}
					echo '<li><div class="col-md-3"'.$style.'>
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">'.$projet[$i]['NOMP'].'</h3>
									<div class="box-tools pull-right">
										<span class="label label-primary">Projet</span>
									</div>
								</div><!-- /.box-header -->
								<div class="box-body">
									<span><b>Région: </b>'.$projet[$i]['REGION'].'</span>
								</div>
								<div class="box-body">
									<span><b>Ville: </b>'.$projet[$i]['VILLE'].'</span>
								</div>
								<div class="box-body">
									<span><b>Date de début: </b>'.$projet[$i]['DATEDEDEBUT'].'</span>
								</div>
								<div class="box-body">
									<span><b>Commentaire: </b></span><br>
									<p align="justify">'.$projet[$i]['COMMENTAIRE'].'</p>
								</div>
								<div class="box-footer">
									<span><b>Projet créé par: </b></span>
								</div>
							</div>
						</div></li>';
					
				}
				echo '</ul>';
				
				
				for($i=0;$i<=count($resultat)-1; $i++){
			echo 'var mark'.$i.' = new google.maps.LatLng('.$resultat[$i]['LATITUDE'].','.$resultat[$i]['LATITUDE'].');
				  mark'.$i.'.setMap(map);
				  var infowindow'.$i.' = new google.maps.InfoWindow({
									content:"Date: '.$resultat[$i]['DATE'].'\n
											 Température: '.$resultat[$i]['TEMPERATURE'].'\n
											 GPE: '.$tech[$i]['GPE'].'"});
				google.maps.event.addListener(marker'.$i.',\'click\', function() {
				infowindow'.$i.'.open(map,marker'.$i.');});';
		}
			?>