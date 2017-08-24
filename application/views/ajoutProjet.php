<?php
$titre = "Nouveau Projet";
include('head.php');
include('nav.php');
?>
  

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="height: auto">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Espace de travail
            <small>MorEMF</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Projets</a></li>
            <li class="active">Nouveau</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content"><br>
			<div class="col-md-6 col-md-offset-1">
			<?php echo form_error('nomP'); ?>
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Nouveau Projet</h3>
					<div class="box-tools pull-right">
						<!-- Buttons, labels, and many other things can be placed here! -->
						<!-- Here is a label for example -->
						<span class="label label-primary">Projet</span>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
					<form method="POST" name="ajoutP">
						<input type="text" name="nomP" id="nomp" class="form-control" placeholder="Nom du projet" value="<?php echo set_value('nomP'); ?>" required><br>
						<input type="text" name="region" id="region" class="form-control" placeholder="Région" value="<?php echo set_value('region'); ?>" required><br>
						<input type="text" name="ville" id="ville" class="form-control" placeholder="Ville" value="<?php echo set_value('ville'); ?>" required><br>
						<label for="dateD">Date de début:</label>
						<input type="date" name="dateD" id="dateD" class="form-control" placeholder="Date de début" required><br>
						<textarea rows="3" cols="50" id="commentaire" name="commentaire" class="form-control" placeholder="Commentaire" ><?php echo set_value('commentaire'); ?></textarea><hr>
						<input type="submit" class="pull-right btn btn-primary" name="rec" value="Enregistrer">
						<input type="reset" class="btn btn-default" value="Annuler">
					</form>
				</div><!-- /.box-body -->
				<!--div class="box-footer">
						
				</div><!-- box-footer -->
			</div><!-- /.box -->
			</div>
			
			<div class="pull-right col-md-4">
			<div class="info-box">
				<!-- Apply any bg-* class to to the icon to color it -->
				<span class="info-box-icon bg-blue"><i class="fa fa-folder-open-o" style="margin-top: 25%"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Total Projets</span>
					<span class="info-box-number"><h3><b><?php echo $nbprojet;?></b></h3></span>
				</div><!-- /.info-box-content -->
			</div><!-- /.info-box -->
			</div>
		
			<div class="pull-right col-md-4">
			<div class="info-box">
				<!-- Apply any bg-* class to to the icon to color it -->
				<span class="info-box-icon bg-green"><i class="fa fa-file-o" style="margin-top: 25%"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Total Campagnes</span>
					<span class="info-box-number"><h3><b><?php echo $nbCampagne;?></b></h3></span>
				</div><!-- /.info-box-content -->
			</div><!-- /.info-box -->
			</div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
		
<?php
include('foot.php');
?>    