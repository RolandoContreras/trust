function guardar_btc(comment_id){
    
    btc_price = $("#btc_price").val();
    
     bootbox.dialog("Confirma que desea guardar el precio del bitcoin?", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-success",
            "callback": function() {
               $.ajax({
                   type: "post",
                   url: site+"dashboard/panel/guardar_btc",
                   dataType: "json",
                   data: {btc_price : btc_price},
                   success:function(data){                             
                   location.reload();
                   }         
           });
            }
        }
    ]);
}