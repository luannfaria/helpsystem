<?php
include "includes/UsuarioDAO.php";
include_once 'includes/Usuario-class.php';


if(!empty($_POST["login"]) && !empty($_POST["senha"])){
$login = $_POST["login"];
$senha = $_POST["senha"];

//Instânciando os objetos usuario e conexão como  banco
  $usuario = new Usuario();
$usuarioDao = new UsuarioDAO();
$usuario->setLogin($login);
$usuario->setSenha($senha);
$retorno;
if($usuarioDao->Inserir($usuario)){
     $retorno=  array(
    "mensagem"=>"Usuário Cadastrado com sucesso",
         "style"=>"Green"
    );
}  else if(mysql_error()) {
     $retorno=  array(
    "mensagem"=>"Erro ao cadastrar usuário",
         "style"=>"Red"
    );
}



echo json_encode($retorno);
}else{
    $retorno=  array(
    "mensagem"=>"Usuário ou  Senha não preenchidos",
        "style"=>"Red"
    );
    echo json_encode($retorno);
}