function alter_data(){
    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;
    var customer_id = document.getElementById("customer_id").value;
    var pierna = $("input[type='radio'][name='pierna']:checked").val();
    
        $.ajax({
        type: "post",
        url: site +"b_data/update_data",
        dataType: "json",
        data: {phone: phone,
               address: address,
               customer_id: customer_id,
               pierna: pierna},
        success:function(data){            
              if(data.message == "true"){  
                 $("#messages").html();
                 var texto = "";
                 texto = texto+'<label style="color:green;">'+data.print+'</label>';
                 $("#messages").html(texto);
                $(location).attr('href',data.url);  
            }
        }            
    });
}

function alter_btc(){
        var customer_id = document.getElementById("customer_id").value;
        var btc = document.getElementById("btc").value;
        
        $.ajax({
        type: "post",
        url: site +"b_data/update_btc_address",
        dataType: "json",
        data: {btc: btc,
               customer_id:customer_id },
        success:function(data){            
              if(data.message == "true"){  
                 $("#messages").html();
                 var texto = "";
                 texto = texto+'<label style="color:green;">'+data.print+'</label>';
                 $("#messages").html(texto);
                $(location).attr('href',data.url);  
            }
        }            
    });
}

function save_bank(){
        var customer_id = document.getElementById("customer_id").value;
        var bank_name = document.getElementById("bank_name").value;
        var titular_name = document.getElementById("titular_name").value;
        var bank_account = document.getElementById("bank_account").value;
        
        $.ajax({
        type: "post",
        url: site +"b_data/update_bank",
        dataType: "json",
        data: {customer_id:customer_id,
               bank_name:bank_name,
               titular_name:titular_name,
               bank_account:bank_account,
            },
        success:function(data){            
              if(data.message == "true"){
                 $("#messages_bank").html();
                 var texto = "";
                 texto = texto+'<label style="color:green;">'+data.print+'</label>';
                 $("#messages_bank").html(texto);
                $(location).attr('href',data.url);  
            }
        }            
    });
}

function alter_password(){
        var customer_id = document.getElementById("customer_id").value;
        var password = document.getElementById("password").value;
        var password2 = document.getElementById("password2").value;
        
        if(password == password2){
            $.ajax({
            type: "post",
            url: site +"b_data/update_password",
            dataType: "json",
            data: {password: password,
                   customer_id:customer_id },
            success:function(data){            
                  if(data.message == "true"){  
                     $("#messages").html();
                     var texto = "";
                     texto = texto+'<label style="color:green;">'+data.print+'</label>';
                     $("#messages").html(texto);
                    $(location).attr('href',data.url);  
                }else{
                    $("#messages").html();
                     var texto = "";
                     texto = texto+'<label style="color:red;">'+data.print+'</label>';
                     $("#messages").html(texto);
                }
             }            
            });
        }else{
            $("#messages").html();
             var texto = "";
             texto = texto+'<label style="color:red;">Las contraseñas no coinciden</label>';
             $("#messages").html(texto);
        }
        
}