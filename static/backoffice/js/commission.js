function consultar(){

    concepto =  $('select[name=concepto]').val();
    $.ajax({
       type: "post",
       url: site+"backoffice/comisiones/concepto",
       dataType: "json",
       data: {concepto : concepto},
       success:function(data){
           if(data.message == "true"){         
                    obj_commissions = data.print;
                    var x = 0;               
                    var texto = "";
               
                    $.each(obj_commissions, function(){
                        texto = texto+'<tr>';
                        texto = texto+'<td>'+obj_commissions[x]['date']+'</td>';
                        texto = texto+'<td>'+obj_commissions[x]['bonus']+'</td>';
                        texto = texto+'<td>'+obj_commissions[x]['amount']+'</td>';
                        if(obj_commissions[x]['status_value'] == 1 || obj_commissions[x]['status_value'] == 2){
                        texto = texto+'<td><span class="label label-success">Procesado</span></td>';
                        }else{
                        texto = texto+'<td><span class="label label-warning">En espera por procesar</span></td>';
                        }
                        texto = texto+'</tr>';
                        x++; 
                    });
                    $("#resultado").html(texto);
            }else{
                        var texto = "";
                        texto = texto+'<tr role="row" class="odd">';
                        texto = texto+'<td colspan="5" align="center">No data available in table</td><td style="display: none;"></td><td style="display: none;"></td><td style="display: none;"></td><td style="display: none;"></td>';
                        texto = texto+'</tr>';
                    $("#resultado").html(texto);
            }
       }         
   });
          
}
function edit_customer(product_id){    
     var url = 'dashboard/clientes/load/'+product_id;
     location.href = site+url;   
}
function cancelar_customer(){
	var url= 'dashboard/clientes';
	location.href = site+url;
}
