<?php
$titre = "Liste des projets";
include('head.php');
include('nav.php');
?>
  

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="height: auto; padding-bottom: 10%;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Espace de travail
            <small>MorEMF</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Projets</a></li>
            <li class="active">Liste</li>
          </ol>
        </section>
		
		<div id="idmodal" class="w3-modal">
				<div class="w3-modal-content">
					
						<div class="col-md-6 col-md-offset-3" style="margin-top: 13%; font-size: 13pt;">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title" id="nomp"></h3>
									<div class="box-tools pull-right">
										<span class="label label-primary">Projet</span>
									</div>
								</div><!-- /.box-header -->
								<div class="box-body">
									<span id="region"></span>
								</div>
								<div class="box-body">
									<span id="ville"></span>
								</div>
								<div class="box-body">
									<span id="dateD"></span>
								</div>
								<div class="box-body">
									<span id="nbc"></span>
								</div>
								<div class="box-body">
									<span><b>Commentaire: </b></span><br>
									<p id="commentaire"></p>
								</div>
								<div class="box-footer">
									<span id="auteur"></span>
									<input type="button" value="Fermer" class="pull-right btn btn-default" onclick="document.getElementById('idmodal').style.display='none'">
									<input type="button" value="Voir statistiques" class="pull-right btn btn-default" style="margin-right:2%">
								</div>
							</div>
						</div>
					
				</div>
			</div>

        <!-- Main content -->
        <section class="content" >
			<div class="col-md-8 col-md-offset-2 " style="margin-bottom: 1%">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Liste des projets</h3>
					<div class="box-tools pull-right">
						<!-- Buttons, labels, and many other things can be placed here! -->
						<!-- Here is a label for example -->
						<span class="label label-primary">Projet</span>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Nom</th>
								<th>Région</th>
								<th>Ville</th>
								<th>Date de début</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								for($i=$debutboucle-1;$i>=$finboucle; $i--){
									echo '<tr>
											<td>'.$projet[$i]['NOMP'].'</td>
											<td>'.$projet[$i]['REGION'].'</td>
											<td>'.$projet[$i]['VILLE'].'</td>
											<td>'.$projet[$i]['DATEDEDEBUT'].'</td>
											<td><input type="button" onclick="showDetails(\''.$projet[$i]['NOMP'].'\',\''.$projet[$i]['REGION'].'\',\''.$projet[$i]['VILLE'].'\',\''.$projet[$i]['DATEDEDEBUT'].'\',\''.$projet[$i]['COMMENTAIRE'].'\',\''.$utilisateur[$i]['NOM'].'\',\''.$utilisateur[$i]['PRENOM'].'\',\''.$nbCampagne[$i].'\')" class="btn btn-primary" value="Détails"></td>
										  </tr>';
								}
							?>
						</tbody>
					</table>
				</div><!-- /.box-body -->
				<div class="box-footer">
					<nav class="pull-right">
						<ul class="pagination">
							<li>
								<a href="../projet/liste?page=<?php if($_SESSION['page']>1){echo $_SESSION['page']-1;}else{echo 1;}?>" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
							</li>
							<?php
								for($i=0;$i<$nbpages;$i++){
									$c=$i+1;
									echo '<li>'.anchor('projet/liste?page='.$c,"$c").'</li>';
								}
							?>
							<li>
								<a id="n" href="../projet/liste?page=<?php if($_SESSION['page']<$nbpages){echo $_SESSION['page']+1;}else{echo $nbpages;}?>" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a>
							</li>
						</ul>
					</nav>
				</div><!-- box-footer -->
			</div><!-- /.box -->
			</div><br><br><br><br>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
		
<?php
include('foot.php');
?>    