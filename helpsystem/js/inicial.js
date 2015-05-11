/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $( document ).ready(function() {
        
         $.ajax({
            type: 'POST',
            url: 'checarSession.php',
            dataType:"Json",
         success: function(msg) {
             if(msg.validado==false)
                 
                 window.location=msg.urlRetorno;
         
                 } 
        });
     
        
    });
    

