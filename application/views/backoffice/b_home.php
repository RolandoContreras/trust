<section>
    <div class="section-heading row">
        <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
            <h1 class="title text-uppercase">Tablero</h1>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right count-down-box">
            <a href="/backend/bonuses/start-up" class="white">until next bonus round.</a>
            <div id="myCounter" data-countdown="1494244800000"></div>
        </div>
    </div> 
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <!-- START widget-->
                  <div class="panel widget bg-green">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-green-dark pv-lg">
                           <em class="icon-diamond fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0"><?php if(count($obj_total)>0){echo "$".$obj_total;}else{echo "$0.00";}?></div>
                           <div class="text-uppercase">Total Pagado</div>
                        </div>
                     </div>
                  </div>
               </div>

                
               <div class="col-lg-3 col-sm-6">
                  <!-- START widget-->
                  <div class="panel widget bg-primary">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-primary-dark pv-lg">
                           <em class="icon-credit-card fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0"><?php if(count($obj_balance)>0){echo "$".$obj_balance;}else{echo "$0.00";}?></div>
                           <div class="text-uppercase">Balance por disponer</div>
                        </div>
                     </div>
                  </div>
               </div>
                
                
<!--               <div class="col-lg-3 col-sm-6">
                   START widget
                  <div class="panel widget bg-purple">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-purple-dark pv-lg">
                           <em class="icon-wallet fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0">0</div>
                           <div class="text-uppercase">Cuenta Mandatoria</div>
                        </div>
                     </div>
                  </div>
               </div>-->

               <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

               <div class="col-lg-3 col-md-6 col-sm-12">
                  <!-- START widget-->
                  <div class="panel widget bg-success">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-success-dark pv-lg">
                           <em class="icon-badge fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0"><?php echo $obj_customer->franchise;?></div>
                           <div class="text-uppercase">Calificaci&oacute;n</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

             <?php if($obj_customer->active == 0){ ?>
                    <div class="row">
                        <div role="alert" class="alert alert-info">
                                    <strong>Seleccion tu paquete:</strong>
                        </div>
                        <div class="form-group">
                                <div class="col-sm-9">
                                    <?php 
                                    if($_SESSION['customer']['country'] == 95){ ?>
                                        <label class="radio-inline">
                                        <input  type="radio" name="kit" id="kit" value="8" 
                                        <?php if($obj_customer->franchise_id == 8){ ?> checked="" <?php } ?> >
                                        <span class=""></span><b>START</b> $50.00 &nbsp;&nbsp;&nbsp;</label>
                                    <?php } ?>
                                    <img src="<?php echo site_url().'static/backoffice/images/basic.jpg';?>" alt="" class="img-responsive img-circle thumb48" style="display: inline !important;">
                                    <label class="radio-inline">
                                        <input  type="radio" name="kit" id="kit" value="2" 
                                        <?php if($obj_customer->franchise_id == 2){ ?> checked="" <?php } ?> >
                                        <span class=""></span><b>BASIC</b> $100.00 &nbsp;&nbsp;&nbsp;</label>
                                    <img src="<?php echo site_url().'static/backoffice/images/platinium.jpg';?>" alt="" class="img-responsive img-circle thumb48" style="display: inline !important;">
                                    <label class="radio-inline">
                                        <input type="radio" name="kit" id="kit" value="3"
                                        <?php if($obj_customer->franchise_id == 3){ ?> checked="" <?php } ?> >
                                       <span class=""></span><b>PLATINIUM</b> $250.00 &nbsp;&nbsp;&nbsp;</label>
                                    <img src="<?php echo site_url().'static/backoffice/images/gold.jpg';?>" alt="" class="img-responsive img-circle thumb48" style="display: inline !important;">
                                    <label class="radio-inline">
                                        <input  type="radio" name="kit" id="kit" value="4"
                                        <?php if($obj_customer->franchise_id == 4){ ?> checked="" <?php } ?> >
                                       <span class=""></span><b>GOLD</b> $500.00 &nbsp;&nbsp;&nbsp;</label>
                                    <img src="<?php echo site_url().'static/backoffice/images/vip.jpg';?>" alt="" class="img-responsive img-circle thumb48" style="display: inline !important;">
                                    <label class="radio-inline">
                                        <input  type="radio" name="kit" id="kit" value="5"
                                        <?php if($obj_customer->franchise_id == 5){ ?> checked="" <?php } ?> >        
                                       <span class=""></span><b>VIP</b> $1000.00 &nbsp;&nbsp;&nbsp;</label>
                                    <img src="<?php echo site_url().'static/backoffice/images/elite.jpg';?>" alt="" class="img-responsive img-circle thumb48" style="display: inline !important;">
                                    <label class="radio-inline">
                                        <input  type="radio" name="kit" id="kit" value="7"
                                        <?php if($obj_customer->franchise_id == 7){ ?> checked="" <?php } ?> >        
                                       <span class=""></span><b>ELITE</b> $5000.00
                                    </label>
                                    <br/><br/>
                                    <button type="button" onclick="make_pedido();" class="btn btn-sm btn-primary bg-danger-dark"><?php echo replace_vocales_voculeshtml("Hacer Pedido");?></button>
                                </div>
                          </div>
                     </div>
            <?php  } ?>
             
             
             <br/><br/>
            <div class="row">
              <div class="col-lg-12">
                <strong>Tu links para referir: </strong><a href="<?php echo site_url().'registro/afiliate/'.str_to_minuscula($obj_customer->username);?>" class="alert-link" target="_blank"><?php echo site_url().'registro/afiliate/'.str_to_minuscula($obj_customer->username);?></a><br>
                <strong>Aqui esta la dirección para pago con bitcoin:</strong><a>188EDdynmC6AWMdiHjsgM4pLF4fvX36LbN</a><br>
                <?php 
                if($obj_customer->active != "1"){ ?>
                    <strong>Para la activación debe enviar a nuestra dirección de bitcoin: </strong>
                    <a class="alert-link">
                        <?php if($obj_customer->franchise_id != 6){echo "$".number_format($obj_customer->price,2)."($obj_customer->franchise)";}
                        if($obj_customer->franchise_id == 1 || $obj_customer->franchise_id == 3 || $obj_customer->franchise_id == 4 || $obj_customer->franchise_id == 5 || $obj_customer->franchise_id == 6 || $obj_customer->franchise_id == 7){
                            echo " + $15.00 (Membership)";}?>
                    </a>
                <?php } ?>
                
                
                <br><br>
                
              </div>
            </div>
             
             
             
             <div class="row">
<div class="col-sm-12 mb-25">
<div class="panel panel-default panel-tab-box">
<div class="panel-body">
<div class="flex-container fix-box-height">
<a href="/backend/my-accounts/onecoin-account" class="col-flex box-height">
<div class="media">
<div class="media-body media-middle">
<h5 class="media-heading">Onecoin Account</h5>
<strong>0.00 ONE</strong>
</div>
<div class="media-right media-middle">
<i class="icon-onecoin fa-3x"></i>
</div>
</div>
</a>
<a href="/backend/my-accounts/tokens-account" class="col-flex box-height">
<div class="media">
<div class="media-body media-middle">
<h5 class="media-heading">Tokens account</h5>
<strong>0.00 TKN</strong>
</div>
<div class="media-right media-middle">
<i class="icon-money-3 fa-3x"></i>
</div>
</div>
<span class="read-more-icon" data-tooltip data-tooltip-class="tooltip-info" title="The tokens account shows the total amount of promotional tokens available for mining.">?</span>
</a>
<a href="/backend/my-accounts/cash-account" class="col-flex box-height">
<div class="media">
<div class="media-body media-middle">
<h5 class="media-heading">Cash account</h5>
<strong>0.00 EUR</strong>
</div>
<div class="media-right media-middle">
<i class="icon-euro fa-3x"></i>
</div>
</div>
<span class="read-more-icon" data-tooltip data-tooltip-class="tooltip-info" title="The cash account shows the available amount funds for purchases or withdrawals.">?</span>
</a>
<a href="/backend/my-accounts/trading-account" class="col-flex box-height">
<div class="media">
<div class="media-body media-middle">
<h5 class="media-heading">Trading account</h5>
<strong>0.00 EUR</strong>
</div>
<div class="media-right media-middle">
<i class="icon-clock fa-3x"></i>
</div>
</div>
<span class="read-more-icon" data-tooltip data-tooltip-class="tooltip-info" title="The trading account shows how much funds you have to use for trading purchases.">?</span>
</a>
<a href="/backend/my-accounts/coinsafe-account" class="col-flex box-height">
<div class="media">
<div class="media-body media-middle">
<h5 class="media-heading">CoinSafe</h5>
<strong>0.00 ONE</strong>
</div>
<div class="media-right media-middle">
<i class="icon-money fa-3x"></i>
</div>
</div>
</a>
<div class="col-flex box-height box-shadow-inset-coming-soon">
<div class="media">
<div class="media-body media-middle uppercase text-center">
<h3 class="media-heading"><strong>coming soon</strong></h3>
</div>
<div class="media-right media-middle">
</div>
</div>
</div>
<a href="/backend/recognition/onelife" class="col-flex box-height">
<div class="media">
<div class="media-body media-middle">
<h5 class="media-heading">One life Points</h5>
<strong>0 OLP</strong>
</div>
<div class="media-right media-middle">
<i class="icon-cloud fa-3x"></i>
</div>
<span class="read-more-icon" data-tooltip data-tooltip-class="tooltip-info" title="OneLife Points show the accumulated amount of OLP you have collected since the day you
                    registered.
                ">?</span>
</div>
</a>
<div class="col-flex box-height">
<div class="media">
<div class="media-body media-middle">
<div class="clearfix">
<h5 class="media-heading pull-left">Directly sponsored</h5>
<strong class="pull-right">0</strong>
</div>
<div class="clearfix">
<h5 class="media-heading pull-left">Rookie</h5>
<strong class="pull-right">0</strong>
</div>
</div>
<div class="media-right media-middle">
<i class="icon-profile fa-3x"></i>
</div>
</div>
<span class="read-more-icon" data-tooltip data-tooltip-class="tooltip-info" title="Directly sponsored shows how many personal sales you have made.">?</span>
</div>
<div class="col-flex box-height">
<div class="media">
<div class="media-body media-middle">
<div class="row">
<h5 class="media-heading col-xs-6">Weekly <strong>
0
</strong>
</h5>
<div class="col-xs-6">Total <strong>
0
</strong>
</div>
</div>
<div class="">
110
BVs to Starter
</div>
</div>
<div class="media-right media-middle">
<i class=" icon-exchange-arrows fa-3x"></i>
</div>
</div>
</div>
<div class="col-flex box-height">
<div class="media">
<div class="media-body">
<h5 class="media-heading">Bonus earned This week</h5>
<strong>0.00 EUR </strong>
<h5 class="media-heading">Total Bonus Earned</h5>
<strong>0.00 EUR</strong>
</div>
<div class="media-right media-middle">
<i class="icon-euro fa-3x"></i>
</div>
</div>
<span class="read-more-icon" data-tooltip data-tooltip-class="tooltip-info" title="Bonus earned this week - last received bonus.
                    Total bonus earned - total bonus accumulated since your first bonus payment.
                ">?</span>
</div>
<div class="col-flex box-height">
<a href="/backend/tools-and-analysis/tools">
<div class="media">
<div class="media-body media-middle clearfix">
<h5 class="media-heading pull-left">Account splits</h5>
<strong class="pull-right">0 of 0</strong>
</div>
<div class="media-right media-middle">
<i class="icon-split fa-lg icon-fix">
<span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span>
</i>
</div>
</div>
<div class="media no-margin">
<div class="media-body media-middle clearfix">
<h5 class="media-heading pull-left">
Super splits </h5>
<strong class="pull-right">0 of 0</strong>
</div>
<div class="media-right media-middle">
<i class="icon-super-split fa-2x icon-fix">
<span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span>
</i>
</div>
</div>
<a href="/backend/tools-and-analysis/tools" class="read-more-icon calculator"><i class="fa fa-calculator"></i></a>
</a>
</div>
<div class="col-flex box-height">
<a href="/backend/tools-and-analysis/analysis">
<div class="media">
<div class="media-body media-middle">
<div class="row vertical-center ">
<h5 class="media-heading col-xs-7">SPLIT BAROMETER</h5>
<strong class="col-xs-5">0%</strong>
</div>
<div class="row vertical-center ">
<h5 class="media-heading col-xs-7">DIFFICULTY INCREASE BAROMETER</h5>
<strong class="col-xs-5">58%</strong>
</div>
</div>
<div class="media-right media-middle">
<i class=" icon-speed-meter fa-3x"></i>
</div>
</div>
</a>
</div>
<div class="col-flex box-height">
<div class="media">
<div class="media-body media-middle">
<div class="row">
<h5 class="media-heading col-xs-4 text-uppercase">TOKEN</h5>
<strong class="col-xs-8">0.14 EUR</strong>
</div>
<div class="row">
<h5 class="media-heading col-xs-4 text-uppercase">ONE</h5>
<strong class="col-xs-8">9.85 EUR</strong>
</div>
</div>
<div class="media-right media-middle">
<i class="icon-line fa-3x"></i>
</div>
</div>
</div>
<div class="col-flex box-height">
<div class="media">
<div class="media-body media-middle">
<h5 class="media-heading">difficulty</h5>
<strong>99.00 TKN</strong>
</div>
<div class="media-right media-middle">
<i class=" icon-inclined-picker fa-3x"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row fix-box-height-byrow">
<div class="col-lg-12">
<div class="well media media-badges">
<div class="row">
<div class="col-lg-3 col-sm-4 box-height-byrow text-center-md flex-items-center mb-xs-30">
<div class="row">
<div class="col-md-4 col-xs-12 pull-right-lg text-center">
<div class="media-middle">
<div class="status-frozen"></div>
</div>
</div>
<div class="col-md-8 col-xs-12 pull-left">
<div class="media-body media-middle">
<div class="mb-20">
<p class="uppercase ralewaybold22px lh-1 mb-15">Frozen
Accounts</p>
<p class="">
<span class="uppercase arial14px bold">x</span> <span class="uppercase ariabold22px">1299</span>
</p>
</div>
<p class="small">
Based on statistics for the last calendar month. </p>
</div>
</div>
</div>
</div>
<div class="col-lg-9 col-sm-8 pull-right box-height-byrow border">
<p class="uppercase ralewaybold22px">AN IMPORTANT NOTE</p>
<div class="small">
<p>Here, at OneLife we take our company&rsquo;s policy and regulations very seriously. Complying with the corporate rules ensures our mutual success and the sustainable growth of the Network. Please make sure you read the corporate Terms and Conditions and the OneLife Brandbook carefully before initiating any actions as an Independent Marketing Associate (IMA) to avoid any misconduct. All reported cases are escalated to the OneLife compliance team and ran through a case evaluation. Note, that every violation of the T&amp;C jeopardizes the entire Network&rsquo;s development and is extremely damaging to the company&rsquo;s good name and reputation. Therefore members, proven to be acting against the regulations will &nbsp;have their accounts frozen. We strongly believe in the power of the Network and encourage you to report any violation you notice at <a href="/cdn-cgi/l/email-protection#6c0f03011c00050d020f092c03020900050a09420919" target="_blank"><span class="__cf_email__" data-cfemail="54373b3924383d353a3731143b3a31383d32317a3121">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a>&nbsp;Lead by example and advocate the rules among your teams, helping us to bring the number of frozen accounts to 0. Promote the healthy growth of our entire ecosystem. We rely on your cooperation and support!</p>
</div>
</div>
</div>
</div>
</div>
</div>
             
             
             
         </div>
      </section>
<script src="<?php echo site_url().'static/backoffice/js/home.js';?>"></script>