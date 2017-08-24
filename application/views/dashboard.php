<?php
$titre = "Dashboard";
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
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Map</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
			<div class="col-md-8">
			<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title">Visualisation des résultats</h3>
					<div class="box-tools pull-right">
						<!-- Buttons, labels, and many other things can be placed here! -->
						<!-- Here is a label for example -->
						<span class="label label-danger">Map</span>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
					<div class="col-md-11">
						<div id="googleMap" style="width: auto; height: 400px;"></div>
					</div>
					<div class="pull-right col-md-1" style="padding-right: 20px;">
						<img src="../../assets/images/color-bar.png" alt="color-bar" style="width: auto; height: 400px;">
					</div>
				</div><!-- /.box-body -->
				<div class="box-footer" id="t">
					The footer of the box
				</div><!-- box-footer -->
			</div><!-- /.box -->
			</div>
			<div class="pull-right col-md-4">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Informations</h3>
						<div class="box-tools pull-right">
							<span class="label label-info">Info</span>
						</div><!-- /.box-tools -->
					</div><!-- /.box-header -->
					<div class="box-body">
						<span id="region"></span>
						<span id="ville"></span>
						<span id="dateCampagne"></span>
					</div><!-- /.box-body -->
					<div class="box-footer">
						The footer of the box
					</div><!-- box-footer -->
				</div>
			</div>
			
			<div class="pull-right col-md-4">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Paramètres</h3>
						<div class="box-tools pull-right">
							<span class="label label-danger">Map</span>
						</div><!-- /.box-tools -->
					</div><!-- /.box-header -->
					<div class="box-body">
						<form method="POST" name="formp">
							<input type="text" name="nomP" id="nomP" class="form-control" placeholder="Nom du projet" onkeyup="complete(this.value)" autocomplete="off" value="<?php echo set_value('nomP'); ?>" required><br>
							<table id="textHint" class="table table-bordered" style="display: none;">
							</table>
							<input type="text" name="nomC" id="nomC" class="form-control" placeholder="Nom de la campagne" onkeyup="complete1(this.value)" autocomplete="off" value="<?php echo set_value('nomC'); ?>" required><br>
							<table id="textHint2" class="table table-bordered" style="display: none;">
							</table>
							<select name="tech" id="tech" class="form-control" placeholder="Technologie" required>
								<option value="" style="color: black;" disabled selected>Technologie</option>
								<option value="fm" style="color: black;">FM</option>
								<option value="gsmrx" style="color: black;">GSM réception (gsmrx)</option>
								<option value="gsmtx" style="color: black;">GSM transmission (gsmtx)</option>
								<option value="dcsrx" style="color: black;">DCS réception (dcsrx)</option>
								<option value="dcstx" style="color: black;">DCS transmssion (dcstx)</option>
								<option value="dect" style="color: black;">DECT</option>
								<option value="tetra" style="color: black;">TETRA</option>
								<option value="tv3" style="color: black;">TV3</option>
								<option value="tv45" style="color: black;">TV45</option>
								<option value="umtsrx" style="color: black;">UMTS réception (umtsrx)</option>
								<option value="umtstx" style="color: black;">UMTS transmission (umtstx)</option>
								<option value="wifi" style="color: black;">WIFI</option>
							</select><br>
							<select name="og" id="og" class="form-control" placeholder="Ordre de grandeur" required>
								<option value="" style="color: black;" disabled selected>Ordre de grandeur</option>
								<option value="V_M" style="color: black;">V/m</option>
								<option value="MW_CM" style="color: black;">mW/cm²</option>
								<option value="W_M" style="color: black;">W/m²</option>
								<option value="GPE" style="color: black;">GPE</option>
								<option value="OE" style="color: black;">OE</option>
							</select>
						</form>
					</div><!-- /.box-body -->
					<div class="box-footer">
						<input type="button" class="pull-right btn btn-primary" name="rec" value="Visualiser" onclick="visualiser()">
						<input type="button" class="btn btn-default" value="Annuler" onclick="document.formp.reset()">
					</div><!-- box-footer -->
				</div>
			</div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
		
<?php
include('foot.php');
?>    