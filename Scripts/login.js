

$(document).ready(function () {

    $('#form-login').on('submit', function(event) {
            event.preventDefault();
        var login = $("#login").val();
        var senha = $("#senha").val();
        $.ajax({
            type: "POST",
            url: "login.php",
            data: {
                login: login,
                senha: senha
            },
            dataType: "JSON",
            success: function (resultado) {
                if (resultado.sucesso) {
                  
                        window.location =resultado.urlRetorno;
                } else {
                    alert(resultado.msgError);
                }
            },
            error: function (error) {
                console.log(error.status);
            }
        });
    });
});



