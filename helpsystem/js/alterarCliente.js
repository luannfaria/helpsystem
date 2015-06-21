$(document).ready(function () {
    var id = requestQueryString("id");

    $.ajax({
        type: 'POST',
        url: 'AlterarCliente.php',
        dataType: "Json",
        data:{idCliente:id},
        success: function (data) {

            
            
            //Setando os campos do formulário  
            $('[name="nome"]').val(data["nome"]);
            $('[name="cpf"]').val(data["cpf"]);
            $('[name="rua"]').val(data["rua"]);
            $('[name="bairro"]').val(data["bairro"]);
            $('[name="numero"]').val(data["numero"]);
            $('[name="cidade"]').val(data["cidade"]);
            $('[name="telefone"]').val(data["telefone"]);
            $('[name="cep"]').val(data["cep"]);
            $('[name="id"]').val(data["id"]);

        }
        
    });
    
});

 $(document).on('submit','form',function (e) {
           
                alert("Alterou");
                $.ajax({
                    type: 'POST',
                    url: 'updateCliente.php',
                    dataType: "Json",
                    data:{
                        id:$('[name="id"]').val(),
                        nome: $('[name="nome"]').val(),
                        cpf:$('[name="cpf"]').val() ,
                        rua: $('[name="rua"]').val(),
                        bairro:$('[name="bairro"]').val(),
                        numero:$('[name="numero"]').val(),
                        cidade:$('[name="cidade"]').val(),
                        telefone:$('[name="telefone"]').val(),
                        cep:$('[name="cep"]').val()
                        
                        
                     },
                      success: function (data) {
                          alert(data.mensagem);
                          window.opener.location.reload();
                          window.close();
                           
                      }
                    
                });
                e.preventDefault();
                 
            });
 



//Função para pegar a QueryString
function requestQueryString(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

//Funções de validação do formulário
function FormataCpf(campo, teclapres)
 {
	var tecla = teclapres.keyCode;
	var vr = new String(campo.value);
	vr = vr.replace(".", "");
	vr = vr.replace("/", "");
	vr = vr.replace("-", "");
	tam = vr.length + 1;
	if (tecla != 14)
	{
            if (tam == 4)
		campo.value = vr.substr(0, 3) + '.';
                    if (tam == 7)
			campo.value = vr.substr(0, 3) + '.' + vr.substr(3, 6) + '.';
			if (tam == 11)
                            campo.value = vr.substr(0, 3) + '.' + vr.substr(3, 3) + '.' + vr.substr(7, 3) + '-' + vr.substr(11, 2);
	};
  };
  
  function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}   

function mascara(t, mask,event){
 var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 if (texto.substring(0,1) != saida){
 t.value += texto.substring(0,1);
 return SomenteNumero(event);
 };
 return SomenteNumero(event);
 };

