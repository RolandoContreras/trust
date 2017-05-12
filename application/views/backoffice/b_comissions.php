      <!-- Main section-->
      <section>
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
              <div class="pull-right text-success">
                Precio bitcoin: $<?php echo $price_btc;?>
              </div>
                              <div class="col-lg-3">
                <img src="<?php echo site_url().'static/backoffice/images/logo-btc2.png';?>" class="responsive" height="100px;" id="LogoClienteMill">
              </div>
              <div class="clearfix"></div>           
            </div>

            <div class="row">
               <div class="col-lg-12">
                    
                     <div class="panel panel-info">
                        <div class="panel-heading">
                           Comisiones calculadas                        </div>
                        <div class="panel-body">
                           <div class="proceso_1 col-lg-12">

                              <div class="proceso_1 col-lg-12">
                              <!--<form>-->
                                 <fieldset>
                                    <legend>Comisiones Calculadas</legend>
                                    <div class="col-lg-5">
                                       <div class="form-group">
                                          <label class="col-lg-3 control-label">Concepto</label>
                                          <div class="col-lg-9">
                                             <select class="form-control" name="concepto" id="concepto" required>
                                                <option value="">***Seleccione***</option>
                                                <option value="1">Bono Referido Directo</option>
                                                <option value="3">Bono Usufructo Diario</option>
                                                <option value="4">Bono Binario</option>
                                                <option value="5">Bono Renovaci&oacute;n</option>
                                                <option value="2">Recargas de Bitcoin</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-2">
                                       <input type="hidden" name="Calcularconceptos" value="1">
                                       <button onclick="consultar();" class="btn btn-sm btn-primary bg-danger-dark">Consultar</button>
                                    </div>
                                  </fieldset>
                              <!--</form>-->
                           </div>

                           <div class="proceso_2 col-lg-12">
                              <legend>Resultados de la busqueda</legend>

                              <table id="table" class="display table table-striped table-hover responsive">
                                 <thead>
                                    <tr>
                                       <th class="all">Fecha</th>
                                         <th>Concepto</th>
                                         <th>Calificaci&oacute;n</th>
                                         <th>Monto</th>
                                    </tr>
                                 </thead>
                                 <tbody id="resultado">
                                     <tr>
                                         <td colspan="5" align="center">No data available in table</td>
                                         <td style="display: none;"></td>
                                         <td style="display: none;"></td>
                                         <td style="display: none;"></td>
                                         <td style="display: none;"></td>
                                     </tr>
                                 </tbody>
                              </table>
                           </div>
                           </div>
                        </div>
                     </div>
                     
                  </div>  

               
            </div>
            
         </div>
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
<script src="<?php echo site_url().'static/backoffice/js/commission.js';?>"></script>
</html>