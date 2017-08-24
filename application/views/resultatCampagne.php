<?php
$titre = "Liste campagnes";
include('head.php');
include('nav.php');
?>
  

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Espace de travail
            <small>MorEMF</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Campagnes</a></li>
            <li class="active">Liste</li>
          </ol>
        </section>
		
		<div id="idmodal" class="w3-modal">
				<div class="w3-modal-content">
					
						<div class="col-md-6 col-md-offset-3" style="margin-top: 13%; font-size: 13pt;">
							<div class="box box-success">
								<div class="box-header with-border">
									<h3 class="box-title" id="nomc"></h3>
									<div class="box-tools pull-right">
										<span class="label label-success">campagne</span>
									</div>
								</div><!-- /.box-header -->
								<div class="box-body">
									<span id="datec"></span>
								</div>
								<div class="box-body">
									<span id="fichier"></span>
								</div>
								<div class="box-body">
									<span><b>Commentaire: </b></span><br>
									<p id="commentaire"></p>
								</div>
								<div class="box-footer">
									<input type="button" value="Fermer" class="pull-right btn btn-default" onclick="document.getElementById('idmodal').style.display='none'">
								</div>
							</div>
						</div>
					
				</div>
		</div>
		
        <!-- Main content -->

		<section class="content" >
			<div class="col-md-8 col-md-offset-2 " style="margin-bottom: 1%">
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Campagnes</h3>
					<div class="box-tools pull-right">
						<!-- Buttons, labels, and many other things can be placed here! -->
						<!-- Here is a label for example -->
						<span class="label label-success">Campagne</span>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Nom</th>
								<th>Date</th>
								<th>Fichier</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if($v==1){
								echo '<tr><td>Aucune campagne enregistrée pour ce projet</td></tr>';
							}
							else{
								if($v==2){
									for($i=$nbc-1;$i>=0; $i--){
										echo '<tr>
											<td>'.$campagne[$i]['NOMC'].'</td>
											<td>'.$campagne[$i]['DATEC'].'</td>
											<td>'.$campagne[$i]['FICHIER'].'</td>
											<td><input type="button" class="btn btn-primary" value="Détails" onclick="showDetails1(\''.$campagne[$i]['NOMC'].'\',\''.$campagne[$i]['DATEC'].'\',\''.$campagne[$i]['FICHIER'].'\',\''.$campagne[$i]['COMMENTAIRE'].'\')"></td>
										  </tr>';
									}
								}
								else{
									for($i=$debutboucle-1;$i>=$finboucle; $i--){
										echo '<tr>
											<td>'.$campagne[$i]['NOMC'].'</td>
											<td>'.$campagne[$i]['DATEC'].'</td>
											<td>'.$campagne[$i]['FICHIER'].'</td>
											<td><input type="button" class="btn btn-primary" value="Détails" onclick="showDetails1(\''.$campagne[$i]['NOMC'].'\',\''.$campagne[$i]['DATEC'].'\',\''.$campagne[$i]['FICHIER'].'\',\''.$campagne[$i]['COMMENTAIRE'].'\')"></td>
										  </tr>';
									}
								}
							}	
							?>
						</tbody>
					</table>
				</div><!-- /.box-body -->
				<div class="box-footer">
					<nav class="pull-right">
						<ul class="pagination">
							<li>
								<a href="../campagne/liste?idprojet=<?php echo $idprojet;?>&page=<?php if($_SESSION['page']>1){echo $_SESSION['page']-1;}else{echo 1;}?>" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
							</li>
							<?php
								for($i=0;$i<$nbpages;$i++){
									$c=$i+1;
									echo '<li>'.anchor('campagne/liste?idprojet='.$idprojet.'&page='.$c,"$c").'</li>';
								}
							?>
							<li>
								<a id="n" href="../campagne/liste?idprojet=<?php echo $idprojet;?>&page=<?php if($_SESSION['page']<$nbpages){echo $_SESSION['page']+1;}else{echo $nbpages;}?>" aria-label="Next">
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