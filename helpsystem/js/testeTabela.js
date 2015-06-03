/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 

  $(document).ready(function () {


    $.ajax({
        type: 'POST',
        url: 'chamados.php',
        dataType: "Json",
        success: function (msg) {

            // vamos criar o elemento HTML table
            var tabela = document.getElementById("dados");
            tabela.border = "1px";
            tabela.cellSpacing = "0px";
            tabela.cellPadding = "3px";

            // vamos criar o corpo da tabela, ou seja, o tbody 
            // var corpo = document.createElement("tbody");
            // tabela.appendChild(corpo);

            var row = "";
            for (var key in msg) {
                if (msg.hasOwnProperty(key)) {
                    row += "<tr>";
                    row += "<td>" + msg[key]["id"] + "</td>";
                    row += "<td>" + msg[key]["cliente"] + "</td>";
                    row += "<td>" + msg[key]["atendente"] + "</td>";
                     row += "<td>" + msg[key]["titulo"] + "</td>";
                    row += "<td>" + msg[key]["data"] + "</td>";
                    row += "<td>" + msg[key]["observacao"] + "</td>";
                    row += "<td>" + msg[key]["status"] + "</td>";
                    row += "<td><button class='alterar-item' data-id='" + msg[key]["id"] + "'  >Alterar</button></td>";
                    row += "</tr>";
                }
            }
            $("#dados").html(row);




            $(".alterar-item").on("click", function (event) {
                var idItem = $(this).attr("data-id");
                alert(idItem);

            });

        }


    });


});
  
 