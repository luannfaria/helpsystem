

$(document).ready(function (){
    
    $("#enviar").click(function (){
        
        var login = $("#login").val();
        var senha = $("#senha").val();
        
        $.ajax({
          type:"POST",
          url:"login.php",
          data: {
              login:login,
              senha:senha              
          },
          dataType: "JSON",
          
              success: function(data){
                  
             window.navigate=data;
             
          },
          error: function(error){
               console.log(error.status);
                
          }
          
         });
                  
            
    });
    
    
});



