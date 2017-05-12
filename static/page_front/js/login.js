/* VALIDACIONES Y FUNCIONABILIDAD DEL MODULO LOGIN
     * ======================================================= */
$(".btn-primary").on("click",function(){
     username = $("#username").val();
     password = $("#password").val();     
    $.ajax({
        type: "Post",
        url: "Login/validate",
        dataType: "json",
        data: {username : username, password:password},
        success:function(data){            
            if (data.message == "false"){                         
                $("#mensaje").html();
                 var texto = "";
                 texto = texto+'<div class="col-xs-12 text-center">';
                 texto = texto+'<div class="mfControls">';
                 texto = texto+'<button class="btn-md">';
                 texto = texto+'<p class="boton-login_no">'+data.print+'</p>';
                 texto = texto+'</button>';
                 texto = texto+'</div>';
                 texto = texto+'</div>';              
                 $("#mensaje").html(texto);
            }else{
                $("#mensaje").html();
                 var texto = "";
                 texto = texto+'<div class="col-xs-12 text-center">';
                 texto = texto+'<div class="mfControls">';
                 texto = texto+'<button class="btn-md">';
                 texto = texto+'<p class="boton-login_si">'+data.print+'</p>';
                 texto = texto+'</button>';
                 texto = texto+'</div>';  
                 texto = texto+'</div>';                 
                 $("#mensaje").html(texto);                     
                 $(location).attr('href',data.url);  
            }
        }            
    });
});