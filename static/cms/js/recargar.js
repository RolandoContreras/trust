function buscar_customer(customer_id){
           $.ajax({
               type: "get",
               url: site+"dashboard/recargar/buscar_customer",
               dataType: "json",
               data: {customer_id : customer_id},
               success:function(data){  
                   if (data.message == "true"){                         
                        obj_customer = data.print;
                        var texto = "";
                        
                        texto = texto+'<strong>Nombres:</strong>';
                        texto = texto+'<input type="text" id="first_name" name="first_name" value="'+obj_customer['first_name']+'" class="input-xlarge-fluid" placeholder="Nombres">';
                        texto = texto+'<br><br>';
                        texto = texto+'<strong>Apellidos:</strong>';
                        texto = texto+'<input type="text" id="last_name" name="last_name" value="'+obj_customer['last_name']+'" class="input-xlarge-fluid" placeholder="Apellidos">';
                        texto = texto+'<br><br>';
                        texto = texto+'<strong>DNI:</strong>';
                        texto = texto+'<input type="text" id="dni" name="dni" value="'+obj_customer['dni']+'" class="input-xlarge-fluid" placeholder="DNI">';
                        texto = texto+'<br><br>';
                        texto = texto+'<strong>Correo Electrónico:</strong>';
                        texto = texto+'<input type="text" id="email" name="email" value='+obj_customer['email']+' class="input-xlarge-fluid" placeholder="Correo">';
                        texto = texto+'<br><br>';
                        texto = texto+'<strong>Monto:</strong>';
                        texto = texto+'<input type="text" id="amoun" name="amoun" value="" class="input-xlarge-fluid" placeholder="Monto">';
                    $("#mensaje").html(texto);
                   }
               }         
           });
}
function cancelar_recarga(){
	var url= 'dashboard/recargas';
	location.href = site+url;
}
function nueva_recargar(){
	var url= 'dashboard/recargas/load';
	location.href = site+url;
}