<!DOCTYPE html>
<html lang="es" class="wide wow-animation">
<!--======================================================== HEAD =========================================================-->
<?php $this->load->view("head"); ?>
<!-- The Main Wrapper -->
<div class="page">
    <!--======================================================== HEADER =========================================================-->
    <?php $this->load->view("header");?>
    <!--======================================================== CONTENT =========================================================-->
    <main class="page-content">
        <!-- Hello -->
        <section class="well-md well-md-inset-2 bg-primary text-center">
            <div class="container wow fadeInUp">
                <h1>
                    <?php echo replace_vocales_voculeshtml("¿QUÉ ES EL BITCOIN?");?>
                </h1>
                <div class="row">
                    <div class="col-md-10 col-md-preffix-1">
                        <p>Primera criptodivisa creada en el 2009 que destaca por su eficiencia, seguridad y facilidad de intercambio. Es una moneda descentralizada ya que no necesita un repositorio central o administrador individual, no necesita de un tercero para transaccionar. EL BITCOIN ES EL FUTURO<br><br><br><img class="logo_btc" src="<?php echo site_url().'static/page_front/images/logo-btc2.png';?>" alt="logo_bitcoin" /></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Hello-->
        <!-- Pricing table -->
        <section>
            <div class="row row-no-gutter pricing-table text-center">
                <div class="col-md-4 wow fadeInLeft bg-grayscale-lighten-2" data-wow-duration="0.4s" data-wow-delay="1s">
                    <div class="pricing-table__item well-sm">
                        <div class="pricing-table__title">100</div>
                        <h1 class="pricing-table__plan-name">BASIC</h1>
                        <div class="pricing-table__price">100 puntos para
                            <p>binario</p>
                        </div>
                        <p>Genera una rentabilidad del (15%) <br>de la compra del paquete en 120 d&iacute;as.</p>
                    </div>
                </div>
                <div class="col-md-4 accented wow fadeInLeft bg-grayscale-lighten-3" data-wow-duration="0.4s" data-wow-delay="0.5s">
                    <div class="pricing-table__item well-sm">
                        <div class="pricing-table__title">250</div>
                        <h1 class="pricing-table__plan-name">PLATINIUM</h1>
                        <div class="pricing-table__price">250 puntos para
                            <p>binario</p>
                        </div>
                        <p>Genera una rentabilidad del (20%) <br>de la compra del paquete en 120 d&iacute;as.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInLeft bg-grayscale-lighten-2" data-wow-duration="0.4s" data-wow-delay="1s">
                    <div class="pricing-table__item well-sm">
                        <div class="pricing-table__title">500</div>
                        <h1 class="pricing-table__plan-name">GOLD</h1>
                        <div class="pricing-table__price">500 puntos para
                            <p>binario</p>
                        </div>
                        <p>Genera una rentabilidad del (25%) <br>de la compra del paquete en 120 d&iacute;as.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing table two -->
        <section>
            <div class="row row-no-gutter pricing-table text-center">
                <div class="col-md-6 wow fadeInLeft bg-grayscale-lighten-2" data-wow-duration="0.8s" data-wow-delay="0s">
                    <div class="pricing-table__item">
                        <div class="pricing-table__title">1000</div>
                        <h1 class="pricing-table__plan-name">VIP</h1>
                        <div class="pricing-table__price">1000 puntos para
                            <p>binario</p>
                        </div>
                        <p style="padding-bottom: 100px !important;">Genera una rentabilidad del (30%) <br>de la compra del paquete en 120 d&iacute;as.</p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInLeft bg-grayscale-lighten-3" data-wow-duration="1.2s" data-wow-delay="0s">
                    <div class="pricing-table__item">
                        <div class="pricing-table__title">5000</div>
                        <h1 class="pricing-table__plan-name">ELITE</h1>
                        <div class="pricing-table__price">5000 puntos para
                            <p>binario</p>
                        </div>
                        <p style="padding-bottom: 100px !important;">Genera una rentabilidad del (35%) <br>de la compra del paquete en 120 d&iacute;as.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Pricing table -->
        <!-- About -->
        <section class="relative well-xl">
            <div class="absolute wow fadeInLeft">
                <div class="row">
                    <div class="col-md-preffix-6 col-md-6">
                        <div class="image-wrap"><img src="<?php echo site_url().'static/page_front/images/page-01_img01.jpg';?>" width="1010" height="1125" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="container wow fadeInRight">
                <div class="row">
                    <div class="col-md-5">
                        <h1>Acerca</h1>
                        <p class="inset-2">
                            <?php echo replace_vocales_voculeshtml("BitShare (compartir bitcoin) es una tienda online de mercadeo en red con un concepto revolucionario de negocio en donde se ha fusionado los metales preciosos con la criptomoneda.");?>
                        </p> <a href="<?php echo site_url().'acerca';?>" class="btn btn-primary btn-md">Explorar M&aacute;s</a> </div>
                </div>
            </div>
        </section>
        <!-- END About-->
        <!-- Testimonials -->
        <!-- <section class="well-md well-md-inset-1 bg-primary text-center"> <h1 class="wow fadeInUp">Testimonials</h1> <div class="row wow fadeInUp"> Owl Carousel <div class="owl-carousel" data-nav="true" data-loop="true" data-items="1"> <div class="owl-item inset-5"> <p>I just don't know how to describe your services... They are extraordinary! I am quite happy with them! Just keep up going this way!</p> <hr class="devider"> <h4><a href="#">Marie Hoffman</a></h4> <p>Female from United States</p> </div> <div class="owl-item inset-5"> <p>Wow, I'm so happy with your service. You managed to exceed my expectations! You guys are very efficient and I will refer more people to your company!</p> <hr class="devider"> <h4><a href="#">Tom Brown</a></h4> <p>Male from United States</p> </div> </div> END Owl Carousel </div> </section>-->
        <!-- END Testimonials-->
        <!-- Quality -->
        <section class="relative well-lg">
            <div class="absolute wow fadeInRight">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-wrap"><img src="<?php echo site_url().'static/page_front/images/pasarelas/blockchain.jpg';?>" width="1010" height="1125" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="container wow fadeInLeft">
                <div class="row">
                    <div class="col-md-preffix-7 col-md-5">
                        <h1>
                            <?php echo replace_vocales_voculeshtml("EL MUNDO ESTÁ ABIERTO AHORA PARA LOS NEGOCIOS BLOCKCHAIN")?>
                        </h1>
                        <p class="inset-2">
                            <?php echo replace_vocales_voculeshtml("Es el corazón de la moneda digital, la tecnología descentralizada que está revolucionando la manera en que la gente intercambia; millones de usuarios y cientos de miles de comerciantes utilizan bitcoin. La tecnología de cadena de bloques es una contabilidad pública entre pares que se mantiene mediante una red distribuida de ordenadores y que no requiere ninguna autoridad central no terceras partes que actúen como intermediario. ")?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Quality-->
        <!-- Partners -->
        <section class="well-sm bg-primary text-center">
            <div class="container wow fadeInUp">
                <h1>Pasarelas de BitCoin</h1>
                <div class="row row-xs-center">
                    <p class="inset-1">
                        <?php echo replace_vocales_voculeshtml("A nivel mundial existen más de 200 pasarelas de pago que aceptan la primera criptomenda EL BITCOIN, negocios y grandes marcas han invertidos más de $927 millones de dólares americanos en infraestructura de esta criptomoneda tales como: visa, citi ventures, goldman sachs, bbva, nyse (new york stock exchanger), overstock, entre otras.")?>
                    </p>
                    <!-- Flex list -->
                    <ul class="flex-list">
                        <li><img src="<?php echo site_url().'static/page_front/images/pasarelas/blockchain.png';?>" alt="" width="117" height="86"></li>
                        <li><img src="<?php echo site_url().'static/page_front/images/pasarelas/bitinka.png';?>" alt="" width="117" height="86"></li>
                        <li><img src="<?php echo site_url().'static/page_front/images/pasarelas/xapo.png';?>" alt="" width="117" height="86"></li>
                        <li><img src="<?php echo site_url().'static/page_front/images/pasarelas/coinbase.png';?>" alt="" width="117" height="86"></li>
                        <li><img src="<?php echo site_url().'static/page_front/images/pasarelas/uphold.png';?>" alt="" width="117" height="86"></li>
                        <li><img src="<?php echo site_url().'static/page_front/images/pasarelas/bitcointoyou.png';?>" alt="" width="117" height="86"></li>
                    </ul>
                    <!-- END Flex list -->
                </div>
            </div>
        </section>
        <!-- END Partners-->
        <!-- Get in touch -->
        <!-- END Get in touch-->
    </main>
    <!--======================================================== FOOTER ==========================================================-->
    <?php $this->load->view("footer");?>
</div>
<!-- Core Scripts -->
<script src="<?php echo site_url().'static/page_front/js/core.min.js';?>"></script>
<!-- Additional Functionality Scripts -->
<script src="<?php echo site_url().'static/page_front/js/script.js';?>"></script>
<!-- begin olark code -->
<!-- Login Backoffice-->
<script src="static/page_front/js/login.js"></script>
<!-- End Login-->
</body>
<!-- Google Tag Manager -->

</html>