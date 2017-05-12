<?php 
//GET TODAY DATE
$today = date("Y-m-d"); 
?>
<!-- Main section-->
      <section>
          <div class="section-heading row">
            <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
                <h1 class="title text-uppercase"><?php echo replace_vocales_voculeshtml("Pagos");?></h1>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right count-down-box">
                <a href="/backend/bonuses/start-up" class="white">until next bonus round.</a>
                <div id="myCounter" data-countdown="1494244800000"></div>
            </div>
        </div>
         <!-- Page content-->
         <!--<div class="content-wrapper">-->
            <div class="row">
               <div class="col-lg-12">
                    
                     <div class="panel panel-info">
                        <div class="panel-heading">
                           Solicitar Pago
                        </div>
                        <div class="panel-body">
                            <div role="alert" class="alert alert-info">
                                <strong>Nota:</strong><br>
                            El monto minimo para solicitar el pago es de $15.<br>Los pedidos de cobro se efectúan de lunes a viernes.<br>Los pagos por usufructo se efectuarán después de 35 días de la fecha de activación.
                            </div>
                            <div class="form-inline" >
                                <p class="lead">
                                Saldo Disponible en Billetera:
                                <b><?php if(count($obj_balance_disponible)>0){echo "$".$obj_balance_disponible;}else{echo "$0.00";}?></b>
                                </p>
                                <div class="form-group">
                                <label for="monto">Monto que Solicita:</label>
                                <select id="monto" name="monto" class="form-control">
                                    <option value="">***Seleccionar***</option>
                                    <option value="1"><?php if(count($obj_balance_red)>0){echo "$".$obj_balance_red." - "."Balance por Red";}else{echo "$0.00 - Balance por Red";}?></option>
                                    <option value="2" <?php if($today < $date_limit_pay){echo "disabled='disabled'";}?>><?php if(count($normal_account)>0){echo "$".$normal_account." - "."Balance por Usufructo";}else{echo "$0.00 - Balance por Usufructo";}?></option>
                                    <option value="3" <?php if($today < $date_limit_pay){echo "disabled='disabled'";}?>><?php if(count($obj_balance_disponible)>0){echo "$".$obj_balance_disponible." - "."Ambos Balances";}else{echo "$0.00 - Ambos Balances";}?></option>
                                </select>
                                </div>
                                <?php 
                                //GET SATURDAY AND SUNDAY
                                $s_and_s = date('w',strtotime($today));
                                if($s_and_s == '6' || $s_and_s == '0'){$style="disabled";}else{$style="";} ?>
                                <!--BLOCK THE BOTON IF IS SATUDAY OR SUNDAY-->
                                        <input class="form-inline" type="hidden" name="SolicitarPago" value="1"/>
                                        <button onclick="enviar_pago();" <?php echo $style;?> class="btn btn-sm btn-primary bg-danger-dark">Enviar Solicitud</button>
                                </div>
                            <br/>
                            <br/>
                            <legend>Movimientos de Solicitudes</legend>
                           <div class="proceso_1 col-lg-12">
                           <div class="proceso_2 col-lg-12">
                              <table id="table" class="display table table-striped table-hover responsive">
                                 <thead>
                                    <tr>
                                         <th>Concepto</th>
                                         <th class="all">Fecha</th>
                                         <th>Monto Enviado</th>
                                         <th class="all">Cuota</th>
                                         <th>Estado</th>
                                    </tr>
                                 </thead>
                                 <tbody >
                                     <?php foreach ($obj_commissions as $value) { ?>
                                      <tr role="row" class="odd">
                                          
                                          <td class="sorting_1">Pagos por comisiones</td>
                                          <td><?php echo formato_fecha($value->date);?></td>
                                          <td>
                                            <span class="text-success"><?php echo "$".$value->amount;?></span>
                                          </td>
                                          <td>
                                            <span class="text-danger"><?php echo "$".$value->fee;?></span>
                                          </td>
                                          <td>
                                               <?php 
                                               if($value->status_value == 2){ ?>
                                                   <span class="label label-danger">Cancelado/Devuelto</span>
                                               <?php }elseif($value->status_value == 3){ ?>
                                                   <span class="label label-warning">En espera de procesar</span>
                                               <?php }elseif($value->status_value == 4){ ?>
                                                   <span class="label label-success">Procesado</span>
                                               <?php } ?>
                                           </td>
                                       </tr>
                                  <?php } ?>
                                </tbody>
                              </table>
                           </div>
                           </div>
                        </div>
                     </div>
                     
                  </div>  

               
            </div>
            
         <!--</div>-->
      </section>
</body>
<script src="<?php echo site_url().'static/cms/js/core/bootstrap-modal.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/bootbox.min.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/jquery-1.11.1.min.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/jquery.dataTables.min.js';?>"></script>
<link href="<?php echo site_url().'static/cms/css/core/jquery.dataTables.css';?>" rel="stylesheet"/>

 <script type="text/javascript">
   $(document).ready(function() {
    $('#table').dataTable( {
         "order": [[ 0, "desc" ]]
    } );
} );
</script>
<script src="<?php echo site_url().'static/backoffice/js/pay.js';?>"></script>
</html>