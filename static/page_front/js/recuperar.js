function send_messages(){
    
    username = $("#username").val();    
    
//    alert(username);
    
    if(username != ""){
        $.ajax({
        type: "post",
        url: "recuperar/send_messages",
        dataType: "json",
        data: {username : username},
        success:function(data){            
            if (data.message == "false"){                         
               $(".alert-0").removeClass('text-danger').addClass('text-danger').html(data.print)
            }else{
               $(".alert-0").removeClass('text-success').addClass('text-success').html(data.print)
            }
        }            
        });
    }else{
        $(".alert-0").removeClass('text-danger').addClass('text-danger').html("Llene todos los campos")
    }
}
