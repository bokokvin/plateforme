<body class="hold-transition skin-blue fixed sidebar-mini" style="width: 100%; height: auto; padding: 0; margin: 0;">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header" >

        <!-- Logo -->
        <a href="index2.html" class="logo">
		  <span class="logo-mini"><b>M</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>M</b>orEMF</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation" >
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo ucfirst($_SESSION['NOM']). ' '.ucfirst($_SESSION['PRENOM']);?> </span>
                </a>
              </li>
			  <li><?php echo anchor('user/dec','Déconnexion'); ?></li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar" style="position:fixed">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><?php echo anchor('user/dashboard','<i class="fa fa-map"></i> <span>Visualisation</span>'); ?></li>
            <li class="treeview" onclick="function(){this.class='active treeview';}" >
				<a href="#"><i class="fa   fa-folder-open"></i> <span>Projets</span><i class="fa fa-angle-left pull-right"></i></</a>
				<ul class="treeview-menu">
                <li><?php echo anchor('projet/nouveau','Nouveau'); ?></li>
                <li><?php echo anchor('projet/liste','Tous les projets'); ?></li>
              </ul>
			</li>
            <li class="treeview">
              <a href="#"><i class="fa fa-file"></i> <span>Campagne</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><?php echo anchor('campagne/nouvelle','Nouvelle'); ?></li>
                <li><?php echo anchor('campagne/chercher','Chercher'); ?></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>