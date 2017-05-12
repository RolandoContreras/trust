function validate_username(username){
        $.ajax({
        type: "post",
        url: site + "registro/validate_username",
        dataType: "json",
        data: {username: username},
        success:function(data){            
                if(data.message == "true"){         
                $(".alert-0").removeClass('text-danger').addClass('text-danger').html(data.print)
                
            }else{
                $(".alert-0").removeClass('text-success').addClass('text-success').html(data.print);
            }
        }            
    });
}

function validate_2passwordr(password2) {
        var password1 = document.getElementById("clave").value;
        var password2 = document.getElementById("repita_clave").value;
        if(password1 == password2){
            $(".alert-1").removeClass('text-danger').addClass('text-success').html("las contrase&ntilde;as coinciden");
        }else{
            $(".alert-1").removeClass('text-danger').addClass('text-danger').html("las contrase&ntilde;as no coinciden");
        }
}

function validate_dni(dni) {
        $.ajax({
        type: "post",
        url: site +  "registro/validate_dni",
        dataType: "json",
        data: {dni: dni},
        success:function(data){            
                if(data.message == "true"){         
                $(".alert-2").removeClass('text-danger').addClass('text-danger').html(data.print)
                
            }else{
                $(".alert-2").removeClass('text-danger').addClass('text-success').html(data.print);
            }
        }            
    });
}

function validate_region(id) {
    
        $.ajax({
        type: "post",
        url: site +  "registro/validate_region",
        dataType: "json",
        data: {id: id},
        success:function(data){            
                if(data.message == "true"){         
                    obj_region = data.print;
                    var texto = "";
                    texto = texto+'<option value="">Seleccionar  Regi&oacuten</option>';
                    var x = 0;               
                    $.each(obj_region, function(){
                        texto = texto+'<option value="'+obj_region[x]['id']+'">'+obj_region[x]['nombre']+'</option>';
                        x++; 
                    });
                    $("#region").html(texto);
            }else{
                    var texto = "";
                    texto = texto+'<option value="">Seleccionar País</option>';
                    $("#region").html(texto);
            }
        }            
    });
}

function crear_registro() {
    
        var clave = document.getElementById("clave").value;
        var repita_clave = document.getElementById("repita_clave").value;

            if(clave == repita_clave){
                var customer_id = document.getElementById("customer_id").value;
                var pierna_customer = document.getElementById("pierna_customer").value;
                var usuario = document.getElementById("usuario").value;
                var name = document.getElementById("name").value;
                var last_name = document.getElementById("last_name").value;
                var address = document.getElementById("address").value;
                var telefono = document.getElementById("telefono").value;
                var dni = document.getElementById("dni").value;
                var email = document.getElementById("email").value;
                var dia = document.getElementById("dia").value;
                var mes = document.getElementById("mes").value;
                var ano = document.getElementById("ano").value;
                var pais = document.getElementById("pais").value;
                var region = document.getElementById("region").value;
                var city = document.getElementById("city").value;

                $.ajax({
                       type: "post",
                       url: site + "registro/crear_registro",
                       dataType: "json",
                       data: {customer_id: customer_id,
                              pierna_customer: pierna_customer,
                              usuario: usuario,
                              clave: clave, 
                              name: name,
                              last_name: last_name,
                              address: address,
                              telefono: telefono,
                              dni: dni,
                              email: email,
                              dia: dia,
                              mes: mes,
                              ano: ano,
                              pais: pais,
                              region: region,
                              city: city},
                          
                       success:function(data){            
                               if(data.message == "true"){         
                                   $(".alert-4").removeClass('text-danger').addClass('text-success').html(data.print);
                                   $(location).attr('href',data.url);  
                           }else{
                                   $(".alert-4").removeClass('text-danger').addClass('text-danger').html("Debe llenar todos los datos");
                           }
                       }            
                   });
                
            }else{
               $(".alert-4").removeClass('text-danger').addClass('text-danger').html("Las contraseñas no coinciden");
            }
}


