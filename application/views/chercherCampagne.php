<?php
$titre = "Chercher une Campagne";
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
            <li class="active">Chercher</li>
          </ol>
        </section>
		
		
        <!-- Main content -->
        <section class="content"><br>
			<div class="col-md-6 col-md-offset-3">
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Liste de campagnes par projet</h3>
					<div class="box-tools pull-right">
						<!-- Buttons, labels, and many other things can be placed here! -->
						<!-- Here is a label for example -->
						<span class="label label-success">Campagne</span>
						<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
					<form method="POST">
						<input type="text" name="nomP" id="nomP" class="form-control" placeholder="Nom du projet" onkeyup="complete(this.value)" autocomplete="off" value="<?php echo set_value('nomP'); ?>" required><br>
						<table id="textHint" class="table table-bordered" style="display: none;">
						</table>
						<hr>
						<input type="reset" class="btn btn-default" value="Annuler" style="margin-left: 35%">
						<input type="submit" class="btn btn-primary" name="rec" value="Chercher">
					</form>
				</div><!-- /.box-body -->
				<!--div class="box-footer">
				</div><!-- box-footer -->
			</div><!-- /.box -->
			</div>
			
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
		
<?php
include('foot.php');
?>    