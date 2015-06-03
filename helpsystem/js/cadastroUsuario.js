
$(document).ready(function() {
    $("#imgentrar").click(function(e) {
         var div=document.getElementById('resultado');
        e.preventDefault();
        if( $("input[name=senha]").val()== $("input[name=repitaSenha]").val()){
        var login = $("input[name=login]");
        var loginPost = login.val();
        var senha = $("input[name=senha]");
        var senhaPost = senha.val();          
        $.post("cadastroUsuario.php", {login: loginPost, senha: senhaPost},
        function(data){
       div.style.color=data.style;
        div.innerHTML=data.mensagem;
         }
         , "json");
     }else{
         div.style.color="Red";
         div.innerHTML="Senhas estão diferentes";
     }
    });
});

