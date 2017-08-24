<?php
$titre = "Nouvelle Campagne";
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
            <li class="active">Nouvelle</li>
          </ol>
        </section>
		
		
        <!-- Main content -->
        <section class="content"><br>
			<div class="col-md-6 col-md-offset-1 ">
			<?php echo form_error('nomC'); ?>
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Nouvelle Campagne</h3>
					<div class="box-tools pull-right">
						<!-- Buttons, labels, and many other things can be placed here! -->
						<!-- Here is a label for example -->
						<span class="label label-success">Campagne</span>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
					<?php echo form_open_multipart('campagne/nouvelle');?>
						<input type="text" name="nomP" id="nomP" class="form-control" placeholder="Nom du projet" onkeyup="complete(this.value)" autocomplete="off" value="<?php echo set_value('nomP'); ?>" required><br>
						<table id="textHint" class="table table-bordered" style="display: none;">
						</table>
						<input type="text" name="nomC" id="nomC" class="form-control" placeholder="Nom de la campagne" value="<?php echo set_value('nomC'); ?>" required><br>
						<input type="file" name="fichier" id="fichier" placeholder="Choisir un fichier"><br>
						<label for="dateD">Date de la campagne:</label>
						<input type="date" name="dateC" id="dateC" class="form-control" placeholder="Date de la campagne" required><br>
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
			
			<div class="pull-right col-md-4">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Progression du  traitement</h3>
					<div class="box-tools pull-right">
						<!-- Buttons, labels, and many other things can be placed here! -->
						<!-- Here is a label for example -->
						<span class="label label-info">Info</span>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
					<div class="progress active" id="progress">
						<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
							<span class="sr-only">40% Complete (success)</span>
						</div>
					</div>
				</div><!-- /.box-body -->
				<div class="box-footer">
					<span>Traitement en cours...</span>
					<span class="pull-right" id="p"><b><?php echo $pourcentage; ?></b></span>
				</div><!-- box-footer-->
			</div><!-- /.box -->
			</div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
		
<?php
include('foot.php');
?>    