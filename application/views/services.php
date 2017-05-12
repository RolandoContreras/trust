<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
 <!--========================================================
                              HEAD
    =========================================================-->
   <?php $this->load->view("head"); ?>
<body>
<!-- The Main Wrapper -->
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <?php $this->load->view("header_secundary"); ?>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main class="page-content">
        <!-- We are Here to Serve You -->
        <section class="well-sm well-sm-inset-1">
            <div class="container">
                <h1>We are Here to Serve You</h1>
                <div class="row">
                    <div class="col-md-4">
                        <h4>Web solutions</h4>
                        <p class="inset-4">Our broad tool-set enables us to partner with you to create and integrate custom solutions that streamline efficiency.</p>
                        <ul class="marked-list">
                            <li><a href="#">Website Design & Development</a></li>
                            <li><a href="#">Mobile Sites and Applications</a></li>
                            <li><a href="#">Responsive Design</a></li>
                            <li><a href="#">Hosting Solutions</a></li>
                            <li><a href="#">Content Management Systems</a></li>
                            <li><a href="#">Audio & Video Streaming</a></li>
                            <li><a href="#">Database Integration</a></li>
                            <li><a href="#">Custom Programming</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h4>Digital marketing</h4>
                        <p class="inset-4">Our digital marketing services will help you increase revenue, deepen relationships, enhance referrals, and elevate your reputation.</p>
                        <ul class="marked-list">
                            <li><a href="#">Search Engine Optimization</a></li>
                            <li><a href="#">Constituency Marketing</a></li>
                            <li><a href="#">Online Donations</a></li>
                            <li><a href="#">eStore</a></li>
                            <li><a href="#">Social Media Integration</a></li>
                            <li><a href="#">Email Campaigns</a></li>
                            <li><a href="#">Landing Page Optimization</a></li>
                            <li><a href="#">Custom Programming</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h4>Growth strategies</h4>
                        <p class="inset-4">Our proven approach will help you develop targeted growth strategies to multiply and measure the impact of your organization. </p>
                        <ul class="marked-list">
                            <li><a href="#">Website Design & Development</a></li>
                            <li><a href="#">Mobile Sites and Applications</a></li>
                            <li><a href="#">Responsive Design</a></li>
                            <li><a href="#">Hosting Solutions</a></li>
                            <li><a href="#">Content Management Systems</a></li>
                            <li><a href="#">Audio & Video Streaming</a></li>
                            <li><a href="#">Database Integration</a></li>
                            <li><a href="#">Custom Programming</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- END We are Here to Serve You-->

        <!-- Business Customers -->
        <section class="well-md well-md-inset-2 bg-primary text-center">
            <div class="container wow fadeInUp">
                <h1>Business Customers</h1>
                <div class="row text-left">
                    <div class="col-md-5 text-center">
                        <img src="<?php echo site_url().'static/page_front/images/page-03_img01.jpg';?>" alt="" width="470" height="284">
                    </div>
                    <div class="col-md-7">
                        <h4>Business customers of all sizes need customized solutions.</h4>
                        <p>We will assist you in getting the reliable & super fast Internet connection you need, as well as discuss options and needs for voice services. We can even help you get Digital TV if you need it at your business.</p>
                        <a href="#" class="btn btn-contrast btn-md">Explore More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Business Customers-->

        <!-- Client Services -->
        <section class="relative well-xl">
            <div class="absolute wow fadeInLeft">
                <div class="row">
                    <div class="col-md-preffix-6 col-md-6">
                        <div class="image-wrap"><img src="<?php echo site_url().'static/page_front/images/page-03_img02.jpg';?>" width="1010" height="1125" alt=""></div>
                    </div>
                </div>
            </div>

            <div class="container wow fadeInRight">
                <div class="row">
                    <div class="col-md-5">
                        <h1>Client Services</h1>
                        <p>We have certified, highly trained professionals that are committed and dedicated to our customer's success. We are experts in business telephone systems, cabling, wireless, access control, surveillance, Wi-Fi hot zones, managed IT services, system management center, help desk and service agreements.</p>
                        <a href="#" class="btn btn-primary btn-md">Explore More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Client Services-->

        <!-- Featured Services -->
        <section class="well-md well-md-inset-2 bg-primary text-center">
            <div class="container wow fadeInUp">
                <h1>Featured Services</h1>
                <p>Our company offers full package of services and provides professionally made supplies for the communications sphere. Our target is to deliver best solutions and make your business more profitable with our support. With the help of our consultants and engineers, we together will build technology solutions that will solve your problems immediately.</p>
                <a href="#" class="btn btn-md btn-contrast">Explore More</a>
            </div>
        </section>
        <!-- END Featured Services-->
    </main>
    <!--========================================================
                              FOOTER
    ==========================================================-->
    <?php $this->load->view("footer");?>
</div>
<!-- Core Scripts -->
<script src="<?php echo site_url().'static/page_front/js/core.min.js';?>"></script>
<!-- Additional Functionality Scripts -->
<script src="<?php echo site_url().'static/page_front/js/script.js';?>"></script>
<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('7830-582-10-3714');/*\]\]>*/</script><noscript><a href="https://www.olark.com/site/7830-582-10-3714/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>