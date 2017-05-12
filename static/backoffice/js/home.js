function make_pedido(){
    var kit = $("input[type='radio'][name='kit']:checked").val();
    
        $.ajax({
        type: "post",
        url: site +"b_home/make_pedido",
        dataType: "json",
        data: {kit: kit},
        success:function(data){            
              if(data.message == "true"){  
                 location.reload();
            }
        }            
    });
}