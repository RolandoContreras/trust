<header class="page-header">
    <!-- RD Navbar -->
    <div class="rd-navbar-wrap absolute">
        <nav class="rd-navbar" data-rd-navbar-lg="rd-navbar-static">
            <div class="rd-navbar-inner">
                <!-- RD Navbar Panel -->
                <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle --><button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar"><span></span></button>
                    <!-- END RD Navbar Toggle -->
                    <!-- RD Navbar Brand -->
                    <div class="rd-navbar-brand"> <img src="<?php echo site_url().'static/page_front/images/logo_b.png';?>" class="brand-logo" alt="" width="44" height="40" style="margin-top: -4px;"> <a href="<?php echo site_url();?>" class="brand-name" style="margin-left: -9px !important;"> IT<span>S</span>HARE </a> </div>
                    <!-- END RD Navbar Brand -->
                </div>
                <!-- END RD Navbar Panel -->
                <!--SOCIAL NETWORK-->
                <div class="rd-navbar-info box box-skin-1">
                    <div class="box__body"> <span class="siguenos">S&iacute;guenos</span>
                        <!--<i class="fa fa-camera-retro"></i>-->
                        <a href="https://www.facebook.com/bitshareoficial/" target="_blank"> <span class="icon-wrapp_face"> <i class="fa fa-facebook fa-1g"></i> </span> </a>
                        <a href="https://www.youtube.com/channel/UCnvEpHFTdj0LZ8JaMKKTUMQ" target="_blank"> <span class="icon-wrapp_you"> <i class="fa fa-youtube-play fa-1g"></i> </span> </a>
                    </div>
                </div>
                <!--END SOCIAL NETWORK-->
                <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav -->
                    <ul class="rd-navbar-nav">
                        <li class="active"> <a href="<?php echo site_url();?>">Inicio</a> </li>
                        <li> <a href="<?php echo site_url().'acerca';?>">Acerca</a> </li>
                        <li> <a href="<?php echo site_url().'plan';?>">Plan</a> </li>
                        <li> <a href="<?php echo site_url().'contacto';?>">Contacto</a> </li>
                        <li> <a href="<?php echo site_url().'login';?>">Login</a> </li>
                        <li> <a href="<?php echo site_url().'faq';?>">FAQ</a> </li>
                    </ul>
                    <!-- END RD Navbar Nav -->
                </div>
            </div>
        </nav>
    </div>
    <!-- END RD Navbar -->
    <!-- Swiper -->
    <div class="swiper-container swiper-slider" data-height="100vh" data-min-height="300px">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="<?php echo site_url().'static/page_front/images/nuevo_concepto.jpg';?>">
            </div>
            <div class="swiper-slide" data-slide-bg="<?php echo site_url().'static/page_front/images/incio-1.jpg';?>">
                <div class="swiper-slide-caption text-center"></div>
            </div>
            <div class="swiper-slide" data-slide-bg="<?php echo site_url().'static/page_front/images/slide-1.jpg';?>">
                <div class="swiper-slide-caption text-center">
                    <h2>Te apoyamos en tu crecimiento personal y financiero</h2>
                    <p>Valoramos las tradiciones de un trabajo eficiente con las herramientas necesarias y creemos que esto es una piedra angular de cualquier empresa exitosa.</p>
                    <div class="btn-group"> <a href="<?php echo site_url().'registro';?>" class="btn btn-md btn-secondary-3">Convi&eacute;rtete en un socio</a> </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="<?php echo site_url().'static/page_front/images/slide-3.jpg';?>">
                <div class="swiper-slide-caption text-center">
                    <h2>Una manera innovadora de comercializar un bien o servicio.</h2>
                    <p>
                        <?php echo replace_vocales_voculeshtml("La tecnología de Bitcoin y BlockChain permite que profesionales y empresas puedan sortear las barreras para recibir pagos de una manera mucho más eficiente.");?>
                    </p>
                    <div class="btn-group">
                        <!--<a href="#" class="btn btn-md btn-secondary-2">Learn More</a>--><a href="<?php echo site_url().'registro';?>" class="btn btn-md btn-secondary-3">Convi&eacute;rtete en un socio</a> </div>
                </div>
            </div>
        </div>
        <!-- Swiper Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <!-- END Swiper -->
</header>