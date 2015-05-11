/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 

      $( document ).ready(function() {
        alert( "document loaded" );
  
    $.ajax({
    type: 'POST',
    url: 'TesteMetos.php',
    dataType:"Json",
     success: function(msg) {
     
      
          // vamos criar o elemento HTML table
    var tabela = document.getElementById("dados");
    tabela.border = "1px";
    tabela.cellSpacing = "0px";
    tabela.cellPadding = "3px";

    // vamos criar o corpo da tabela, ou seja, o tbody 
    var corpo = document.createElement("tbody");
    tabela.appendChild(corpo);
    
    
    
      
      
     
         $.each(msg, function() {
             var linha = corpo.insertRow(-1);
          $.each(this, function(index, value) {
            var celula = linha.insertCell(-1);
	        celula.innerHTML =value;
                    
	    }); 
         });
      
    

    // vamos anexar a tabela recém-criada a um elemento div
    var container = document.getElementById("container");
    container.appendChild(tabela);
      
    }
  });
 
  });