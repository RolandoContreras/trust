<!DOCTYPE html>
<html lang="en">
<!--START HEAD-->
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="BitShare (compartir Bitcoin) es una plataforma financiera con el fin de ayudar a capitalizar y dar herramientas para un crecimiento económico y personal a las personas en este nuevo cambio de era.">
   <meta name="keywords" content="bitshare, software, multinivel, binario, negocio, mlm, dinero, bitcoin, millones">
    <link rel="icon" href="<?php echo site_url().'static/page_front/images/favicon.ico'?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo site_url().'static/page_front/images/favicon.ico'?>" type="image/x-icon">
    <meta name="robots" CONTENT="noindex, nofollow" />
    <title>BITSHARE</title>
       <!-- FONT AWESOME-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/font-awesome.min.css';?>">
       <!-- SIMPLE LINE ICONS-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
       <!-- ANIMATE.CSS-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/animate.min.css';?>">
       <!-- WHIRL (spinners)-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/whirl.css';?>">
       
       <!--CSS ONE-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/one/style_one.css';?>">
       <!------>
       
       <!-- =============== PAGE VENDOR STYLES ===============-->
       <!-- WEATHER ICONS-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/weather-icons.min.css';?>">
       <!-- =============== BOOTSTRAP STYLES ===============-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/bootstrap.css';?>" id="bscss">
       <!-- SWEET ALERT-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/sweetalert.css';?>">
       <!-- DATATABLES-->
            <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/dataTables.colVis.css';?>">
            <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/dataTables.bootstrap.css';?>">
       <!-- =============== APP STYLES ===============-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/app.css';?>" id="maincss">
       <!-- =============== APP TEMAS ===============-->
       <link id="autoloaded-stylesheet" rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/theme-e.css';?>">
       <script src="https://use.fontawesome.com/684aca07c3.js"></script>
            <style type='text/css'>

                    body,
                    .wrapper > .aside {background-color: #3a3f51;}
                    /* ========================================================================
                       Component: top-navbar
                     ========================================================================== */
                    /*Color de fondo donde estan las opciones de la barra superior*/
    				.topnavbar .navbar-header {
                      background-color: transparent;
                      background-image: -webkit-linear-gradient(left,  0%,  100%);
                      background-image: -o-linear-gradient(left,  0%,  100%);
                      background-image: linear-gradient(to right,  0%,  100%);
                      background-repeat: repeat-x;
                      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='', endColorstr='', GradientType=1);
                    }
                    @media only screen and (min-width: 768px) {
                      .topnavbar .navbar-header {
                        background-image: none;
                      }
                    }
                    .topnavbar .navbar-nav > li > a,
                    .topnavbar .navbar-nav > .open > a {
                    }
                    .topnavbar .navbar-nav > li > a:hover,
                    .topnavbar .navbar-nav > .open > a:hover,
                    .topnavbar .navbar-nav > li > a:focus,
                    .topnavbar .navbar-nav > .open > a:focus {
                    }
                    .topnavbar .navbar-nav > .active > a,
                    .topnavbar .navbar-nav > .open > a,
                    .topnavbar .navbar-nav > .active > a:hover,
                    .topnavbar .navbar-nav > .open > a:hover,
                    .topnavbar .navbar-nav > .active > a:focus,
                    .topnavbar .navbar-nav > .open > a:focus {
                      background-color: transparent;
                    }
                    .topnavbar .navbar-nav > li > [data-toggle='navbar-search'] {
                      color: #ffffff;
                    }
                    /*Color fondo barra superior*/
                    .topnavbar .nav-wrapper {
                      background-image: -webkit-linear-gradient(left,  0%,  100%);
                      background-image: -o-linear-gradient(left,  0%,  100%);
                      background-image: linear-gradient(to right,  0%,  100%);
                      background-repeat: repeat-x;
                      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='', endColorstr='', GradientType=1);
                    }
                    @media only screen and (min-width: 768px) {
                      .topnavbar {
                        background-image: -webkit-linear-gradient(left,  0%,  100%);
                        background-image: -o-linear-gradient(left,  0%,  100%);
                        background-image: linear-gradient(to right,  0%,  100%);
                        background-repeat: repeat-x;
                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='', endColorstr='', GradientType=1);
                      }
                      .topnavbar .navbar-nav > .open > a,
                      .topnavbar .navbar-nav > .open > a:hover,
                      .topnavbar .navbar-nav > .open > a:focus {
                        box-shadow: 0 -3px 0 rgba(255, 255, 255, 0.5) inset;
                      }
                      .topnavbar .navbar-nav > li > a,
                      .topnavbar .navbar-nav > .open > a {
                      }
                      .topnavbar .navbar-nav > li > a:hover,
                      .topnavbar .navbar-nav > .open > a:hover,
                      .topnavbar .navbar-nav > li > a:focus,
                      .topnavbar .navbar-nav > .open > a:focus {
                      }
                    }

                    /* ========================================================================
                       Component: sidebar
                     ========================================================================== */
                    .sidebar .nav > li > a,
                    .sidebar .nav > li > .nav-item {
                    }
                    .sidebar .nav > li > a:focus,
                    .sidebar .nav > li > .nav-item:focus,
                    .sidebar .nav > li > a:hover,
                    .sidebar .nav > li > .nav-item:hover {
                    }
                    .sidebar .nav > li > a > em,
                    .sidebar .nav > li > .nav-item > em {
                      color: inherits;
                    }
                    .sidebar .nav > li.active,
                    .sidebar .nav > li.open,
                    .sidebar .nav > li.active > a,
                    .sidebar .nav > li.open > a,
                    .sidebar .nav > li.active .nav,
                    .sidebar .nav > li.open .nav {
                    }
                    .sidebar .nav > li.active > a > em,
                    .sidebar .nav > li.open > a > em {
                    }
                    .sidebar .nav > li.active {
                      border-left-color: 0;
                    }
                    .sidebar-subnav {
                      background-color: 0;
                    }
                    .sidebar-subnav > .sidebar-subnav-header {
                      color: 0;
                    }
                    .sidebar-subnav > li > a,
                    .sidebar-subnav > li > .nav-item {
                      color: 0;
                    }
                    .sidebar-subnav > li > a:focus,
                    .sidebar-subnav > li > .nav-item:focus,
                    .sidebar-subnav > li > a:hover,
                    .sidebar-subnav > li > .nav-item:hover {
                      color: 0;
                    }
                    .sidebar-subnav > li.active > a,
                    .sidebar-subnav > li.active > .nav-item {
                      color: 0;
                    }
                    .content-wrapper>.content-heading{
                            background-color: #ffffff;
                            padding: 10px;
                    }
            </style>
<script type="text/javascript">
    var site = '<?php echo site_url();?>';
</script>
</head>

<body>
   <div class="wrapper">
      <!--START HEADER AND ASIDE-->
      
      <!-- top navbar-->  
<header class="topnavbar-wrapper">
	        <!-- START Top Navbar-->
	        <nav role="navigation" class="navbar topnavbar">
	            <!-- START navbar header-->
	            <div class="navbar-header">
	               	<a href="#" class="navbar-brand">
	                  	<div class="brand-logo">
	                  		<img src="<?php echo site_url().'static/backoffice/images/logo_bitshore.png';?>" alt="Logo" class="img-responsive">
	                  	</div>
	                  	<div class="brand-logo-collapsed">
	                     	<img src="<?php echo site_url().'static/backoffice/images/logo_b.png';?>" style="max-height: 40;" alt="App Logo" class="img-responsive">
	                  	</div>
	               	</a>
	            </div>
	            <div class="nav-wrapper">
	               <!-- START Left navbar-->
	               	<ul class="nav navbar-nav">
	                  	<li>
	                     	<!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
	                     	<a href="#" data-toggle-state="aside-collapsed" class="hidden-xs">
	                        	<em class="icon-list"></em>
	                     	</a>
	                     	<!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
	                     	<a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
	                        	<em class="icon-list"></em>
	                     	</a>
	                  	</li>
	            </ul>
	            <!-- START Right Navbar-->
	               	<ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" title="Listado de archivos para descargar">
                                    <em class="icon-cloud-download"></em>
                                </a>
                            </li>
	                  	<!-- START Alert menu-->
                            <li class="dropdown dropdown-list">
                                <a href="#">
                                    <em class="icon-envelope-open"></em>
                                    <div class="count-mensajes label label-danger"></div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url().'Login/logout';?>" title="Salir">
                                   <em class="icon-logout"></em>
                                </a>
                            </li>
	                  <!-- END Offsidebar menu-->
	               </ul>
	               <!-- END Right Navbar-->
	            </div>
	         </nav>
	         <!-- END Top Navbar-->
	      </header>
	      	<aside class="aside">
	         	<!-- START Sidebar (left)-->
	         	<div class="aside-inner">
	            	<nav data-sidebar-anyclick-close="" class="sidebar">
	               	<!-- START sidebar nav-->
	               		<ul class="nav">
                                    <!-- START user info-->
                                    <li class="has-user-block">
                                        <div id="user-block" class="">
                                            <div class="item user-block">
                                            <!-- User picture-->
                                                <div class="user-block-picture">
                                                <div class="user-block-status">
                                                    <?php
                                                        switch ($_SESSION['customer']['franchise_id']) {
                                                                case 2:
                                                                    $images = "basic.jpg";
                                                                    break;
                                                                case 3:
                                                                    $images = "platinium.jpg";
                                                                    break;
                                                                case 4:
                                                                    $images = "gold.jpg";
                                                                    break;
                                                                case 5:
                                                                    $images = "vip.jpg";
                                                                    break;
                                                                case 6:
                                                                    $images = "default.jpg";
                                                                    break;
                                                                case 7:
                                                                    $images = "elite.jpg";
                                                                    break;
                                                                case 8:
                                                                    $images = "start.jpg";
                                                                    break;
                                                            }
                                                        ?>
                                                <a><img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle"></a>
                                                <?php if($_SESSION['customer']['active'] == 1){ ?>
                                                    <div class="circle circle-success circle-lg"></div>
                                                <?php }else{ ?>
                                                    <div class="circle circle-danger circle-lg"></div>
                                                <?php } ?>
                                                        
                                                </div>
                                                </div>
                                                    <!-- Name and Job-->
                                                <div class="user-block-info">
                                                <span class="user-block-name">Hola, &nbsp;<?php echo first_capital_letter($_SESSION['customer']['name'])?></span>
                                                <span class="user-block-role">
                                                    <?php if($_SESSION['customer']['active']==1){ ?>
                                                        <span class="label label-success">
                                                            <em class="icon-star"></em> Activo
                                                        </span>
                                                    <?php }else{ ?>
                                                        <span class="label label-danger">
                                                            <em class="icon-star"></em> Inactivo
                                                        </span>
                                                    <?php } ?>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                		<!-- END user info-->
                                    <?php 
                                    $url = explode("/",uri_string()); 
                                    $style_inicio = "";
                                    $style_misdatos = "";
                                    $style_comisiones = "";
                                    $style_information_center = "";
                                    $style_mired = "";
                                    $style_billetera = "";
                                    $style_pagos = "";
                                    if(isset($url[1])){
                                        switch ($url[1]) {
                                            ////////
                                                    case "misdatos":
                                                        $style_misdatos = "active";
                                                        break;
                                                    case "comisiones":
                                                        $style_comisiones = "active";
                                                        break;
                                                    case "balance":
                                                        $style_comisiones = "active";
                                                        break;
                                                    case "unilevel":
                                                        $style_mired = "active";
                                                        break;
                                                    case "binario":
                                                        $style_mired = "active";
                                                        break; 
                                                    case "centro-informacion":
                                                        $style_information_center = "active";
                                                        break;
                                                    case "billetera":
                                                        $style_billetera = "active";
                                                        break;
                                                    case "pagos":
                                                        $style_pagos = "active";
                                                        break;
                                                    default:
                                                         $title = "Inicio";
                                            }
                                    }else{
                                        $style_inicio = "active";
                                    }?>    
                                    <li class="nav-heading">
                                        <span>Menu de Navegación</span>
                                    </li>
                                    
	                  		<li class="<?php echo $style_inicio?>">
                                            <a href="<?php echo site_url().'backoffice'?>" title="Inicio">
                                            <em class="fa fa-tachometer fa-lg" aria-hidden="true"></em>
                                            <span>Tablero</span>
	                     		</a>
                                            
	                  		</li>
                                        <li class="<?php echo $style_misdatos ?>">
                                            <a href="<?php echo site_url().'backoffice/misdatos'?>" title="Mi Datos">
                                            <em class="fa fa-address-book fa-lg" aria-hidden="true"></em>
                                            <span>Mi Perfil</span>
	                     		</a>
	                  		</li>
                                        <li class="<?php echo $style_mired;?>">
			                    <a href="#tree" title="Solicitudes" data-toggle="collapse">
			                        <em class="icon-organization fa-lg"></em>
			                        <span>Mi red</span>
			                    </a>
                                            <ul id="tree" class="nav sidebar-subnav collapse">
                                                    <li class="sidebar-subnav-header">Arbol</li>
                                                    <li class="">
                                                        <a href="<?php echo site_url().'backoffice/binario';?>" title="Arbol Binario">
                                                            <span>Arbol Binario</span>
                                                            </a>
                                                    </li>
                                                    <li class="">
                                                            <a href="<?php echo site_url().'backoffice/unilevel';?>" title="Arbol Unilevel">
                                                            <span>Arbol Unilevel</span>
                                                            </a>
                                                    </li>
                                            </ul>
	                  		</li>
                                        <li class="<?php echo $style_information_center;?>">
                                            <a href="<?php echo site_url().'backoffice/centro-informacion';?>" title="Billetera">
                                                <em class="fa fa-cloud-download fa-lg" aria-hidden="true"></em>
                                                <span><?php echo replace_vocales_voculeshtml("Centro de Información");?></span>
                                            </a>
	                  		</li>
	                  		<li class="<?php echo $style_comisiones;?>">
                                            <a href="#comisiones" title="Comisiones" data-toggle="collapse">
			                        <em class="icon-chart fa-lg"></em>
			                        <span>Mis Comisiones</span>
			                    </a>
                                            <ul id="comisiones" class="nav sidebar-subnav collapse">
                                                <li class="sidebar-subnav-header">Comisiones</li>
                                                <li class="">
                                                        <a href="<?php echo site_url().'backoffice/comisiones';?>" title="Mis Comisiones">
                                                        <span>Mis Comisiones</span>
                                                        </a>
                                                </li>
                                                <li class="">
                                                        <a href="<?php echo site_url().'backoffice/balance';?>" title="Mi Balance">
                                                        <span>Mi Balance</span>
                                                        </a>
                                                </li>
                                            </ul>
	                  		</li>

	                  		<li class="<?php echo $style_billetera;?>">
                                            <a href="<?php echo site_url().'backoffice/billetera';?>" title="Billetera">
                                                <em class="icon-wallet fa-lg"></em>
                                                <span>Mi Billetera</span>
                                            </a>
	                  		</li>
	                  		<li class="<?php echo $style_pagos;?>">
			                    <a href="<?php echo site_url().'backoffice/pagos';?>" title="Pagos">
                                                <em class="fa fa-university fa-lg" aria-hidden="true"></em>
			                        <span>Solicitar Pago</span>
			                    </a>
	                  		</li>
	               		</ul>
	               	<!-- END sidebar nav-->
	            	</nav>
	         	</div>
	         	<!-- END Sidebar (left)-->
	      	</aside>
      		<!-- offsidebar-->
      <!-- Main section-->
            <?php echo $body;?> 
      <!--START FOOTER-->
<footer>
    <span>Inversiones Bitshare S.A.C.   &copy; 2016 - BitShare</span><br>
    <!--<span>&copy; 2017 - BitShare</span>-->
</footer>
   </div>
		   <!-- MODERNIZR-->
		   <script src="<?php echo site_url().'static/backoffice/js/modernizr.js';?>"></script>
		   <!-- JQUERY-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.js';?>"></script>
		   <!-- BOOTSTRAP-->
		   <script src="<?php echo site_url().'static/backoffice/js/bootstrap.js';?>"></script>
		   <!-- STORAGE API-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.storageapi.js';?>"></script>
		   <!-- JQUERY EASING-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.easing.js';?>"></script>
		   <!-- ANIMO-->
		   <script src="<?php echo site_url().'static/backoffice/js/animo.js';?>"></script>
		   <!-- SLIMSCROLL-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.slimscroll.min.js';?>"></script>
		   <!-- LOCALIZE-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.jquery.localize.js';?>"></script>
		   <!-- RTL demo
		   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
		   <!-- SPARKLINE-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.sparkline.min.js';?>"></script>
		   <!-- PARSLEY-->
		   <script src="<?php echo site_url().'static/backoffice/js/parsley.min.js';?>"></script>
                   <!-- SWEET ALERT-->
                   <script src="<?php echo site_url().'static/backoffice/js/sweetalert.min.js';?>"></script>	
		   <!-- FLOT CHART-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.tooltip.min.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.resize.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.pie.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.time.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.categories.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.spline.min.js';?>"></script>
		   <!-- CLASSY LOADER-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.classyloader.min.js';?>"></script>
		   <!-- MOMENT JS-->
                   <script src="<?php echo site_url().'static/backoffice/js/moment-with-locales.min.js';?>"></script>
		   <!-- DATATABLES-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.dataTables.min.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/dataTables.colVis.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/dataTables.bootstrap.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/dataTables.bootstrapPagination.js';?>"></script>   
		   <!-- =============== APP SCRIPTS ===============-->
		   <script src="<?php echo site_url().'static/backoffice/js/app.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/afiliados.js';?>"></script>
</body>
</html>