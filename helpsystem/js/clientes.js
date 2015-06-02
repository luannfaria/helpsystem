 $(document).ready(function () {


    $.ajax({
        type: 'POST',
        url: 'clientes.php',
        dataType: "Json",
        success: function (msg) {

            // vamos criar o elemento HTML table
            var tabela = document.getElementById("clientes");
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
                    row += "<td>" + msg[key]["Id"] + "</td>";
                    row += "<td>" + msg[key]["nome"] + "</td>";
                    row += "<td>" + msg[key]["cpf"] + "</td>";
                     row += "<td>" + msg[key]["telefone"] + "</td>";
                    row += "<td>" + msg[key]["rua"] + "</td>";
                    row += "<td>" + msg[key]["numero"] + "</td>";
                    row += "<td>" + msg[key]["bairro"] + "</td>";
                     row += "<td>" + msg[key]["cidade"] + "</td>";
                      row += "<td>" + msg[key]["cep"] + "</td>";
                    row += "<td><button class='alterar-item' data-id='" + msg[key]["Id"] + "'  >Alterar</button></td>";
                    row += "</tr>";
                }
            }
            $("#clientes").html(row);




            $(".alterar-item").on("click", function (event) {
                var idItem = $(this).attr("data-id");
                alert(idItem);

            });

        }


    });


});
