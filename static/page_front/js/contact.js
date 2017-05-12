function send_messages(){
    
    name = $("#name").val();    
    email = $("#email").val();     
    message = $("#message").val();
    
    if(name != "" && email != "" && message != ""){
        $.ajax({
        type: "post",
        url: "contact/send_messages",
        dataType: "json",
        data: {name : name, email:email, message:message,},
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
function send_login(){
    
    username = $("#username").val();    
    password = $("#password").val();     
    
    if(username != "" && password != ""){
        $.ajax({
        type: "Post",
        url: "Login/validate",
        dataType: "json",
        data: {username : username, password:password},
        success:function(data){            
            if (data.message == "false"){                         
                $(".alert-0").removeClass('text-danger').addClass('text-danger').html(data.print)
            }else{
                $(".alert-0").removeClass('text-success').addClass('text-success').html(data.print)
                $(location).attr('href',data.url);  
            }
        }            
    });
  }else{
       $(".alert-0").removeClass('text-danger').addClass('text-danger').html(data.print)
  }   
}
