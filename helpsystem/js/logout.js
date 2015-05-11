/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('#logout').click(function (e) {
            e.preventDefault();
            
            $.ajax({
            type: 'POST',
            url: 'logout.php',
            dataType:"Json",
         success: function(msg) {
                 window.location=msg.urlRetorno;
             }
                
        });
            
});
