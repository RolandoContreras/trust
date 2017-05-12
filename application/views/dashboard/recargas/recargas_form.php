<link href="<?php echo site_url();?>static/cms/css/uploadimg.css" rel="stylesheet" />
<script src="<?php echo site_url();?>static/cms/js/core/bootstrap-fileupload.js"></script>
<link href="<?php echo site_url();?>static/cms/plugins/tags/chosen.css" rel="stylesheet" />
<script src="<?php echo site_url();?>static/cms/plugins/tags/chosen.jquery.js"></script>
<script src="<?php echo site_url();?>static/cms/js/recargar.js"></script>
<script src="<?php echo site_url();?>static/cms/plugins/ckeditor/ckeditor.js"></script>
<!-- main content -->

<form id="customer-form" name="customer-form" enctype="multipart/form-data" method="post" action="<?php echo site_url()."dashboard/recargas/validate";?>">
<div id="main_content" class="span7">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                <div class="navbar navbar-static navbar_as_heading">
                        <div class="navbar-inner">
                                <div class="container" style="width: auto;">
                                        <a class="brand"></i> Formulario de Recargas</a>
                                </div>
                        </div>
                </div>
                <!--GET CUSTOMER ID-->
                <input type="hidden" name="commissions_id" id="commissions_id" value="<?php echo isset($commissions_id)?$commissions_id->commissions_id:"";?>">
              
                <div class="well nomargin" style="width: 800px;">
                    <div class="inner">
                    <strong>Usuario:</strong>
                        <select name="username" id="username">
                        <option value="">[ Seleccionar ]</option>
                            <?php foreach ($obj_customer as $value ): ?>
                        <option onclick="buscar_customer('<?php echo $value->customer_id;?>');" value="<?php echo $value->customer_id;?>"><?php echo $value->username;?>
                        </option>
                            <?php endforeach; ?>
                        </select>
                       
                    </div>
                    <br/>
                </div>
              <br><br>
              <div id="mensaje">
              </div>
                <br><br>
                <br><br>
            
                 
                <div class="subnav nobg">
                    <button class="btn btn-danger btn-small pull-left" type="reset" onclick="cancelar_recarga();">Cancelar</button>                    
                    <button class="btn btn-primary btn-small pull-right"  type="submit">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
</form>
<script type="text/javascript">
    var show = '<?php echo $modulos?>';
    $(".chzn-select").chosen();
    
    $("#tags").chosen().change( function(e){
        $("#tag").val($(this).val());
    });         
    
    $('#timepicker1').timepicker({
        minuteStep: 1,    
        showSeconds: true,
        showMeridian: false,
        showInputs: true
    });
        
    $('#timepicker1').on('change', function() {                
        $("#time").val($(this).val());        
    });
</script>
