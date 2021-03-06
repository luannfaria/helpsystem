 $(document).ready(function () {


    $.ajax({
        type: 'POST',
        url: 'clientes.php',
        dataType: "Json",
        success: function (msg) {
            var tabela = document.getElementById("clientes");
            
            tabela.cellSpacing = "2px";
            tabela.cellPadding = "3px";

            var row = "";
            for (var key in msg) {
                if (msg.hasOwnProperty(key)) {
                    row += "<tr>";
                    row += "<td>" + msg[key]["id"] + "</td>";
                    row += "<td>" + msg[key]["nome"] + "</td>";
                    row += "<td>" + msg[key]["cpf"] + "</td>";
                    row += "<td>" + msg[key]["telefone"] + "</td>";
                    row += "<td>" + msg[key]["rua"] + "</td>";
                    row += "<td>" + msg[key]["numero"] + "</td>";
                    row += "<td>" + msg[key]["bairro"] + "</td>";
                    row += "<td>" + msg[key]["cidade"] + "</td>";
                    row += "<td>" + msg[key]["cep"] + "</td>";
                    row += "<td><button class='alterar-item' data-id='" + msg[key]["id"] + "'  >Alterar</button></td>";
                   // row+= "<td width='40'> <input id='buttoneditar' class='alterar-item' data-id'"+msg[key]["id"]+" type='image'  src='imagens/edit.png' title='Editar cliente' '/></td>";
                    row += "<td><button type='submit' class='delete' data-id='" + msg[key]["id"] + "' >Deletar</button></td>";
                    row += "</tr>";
                }
            }
            //populando a tabela
            $("#clientes").html(row);
            //função de alterar    
            $(".alterar-item").on("click", function (event) {
                var idCliente = $(this).attr("data-id");
                	
                	window.open("AlterarCliente.html?id="+idCliente,"Alterar Cliente");
                        
            });
            //função de deletar
              $('.delete').on('click', function (e) {
                
                var idCliente = $(this).attr("data-id");
                	confirm("Tem certeza de deletar esse cliente ?");
                 $.post("deletarCliente.php", {id: idCliente}, function(data) {
                        alert(data); 
                        window.location.reload();
                 });
            }); 
        }       
    });
    
});

      