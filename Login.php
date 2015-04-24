<?php

include_once 'includes/Usuario-class.php';
include_once 'Includes/UsuarioDAO.php';

//Recuperando os dados do javascript


$login = $_POST["login"];
$senha = $_POST["senha"];

//Instanciando objeto da classe DAO Usuário
$usuarioDao = new UsuarioDAO();

$usuarioResultado = new Usuario();
//Setando e obtendo resultados da consulta
$usuarioResultado = $usuarioDao->GetUsuario($login,$senha);

    if (isset($usuarioResultado)) {
        $retorno = array(
        "sucesso"=> true,
        "urlRetorno"=>"http://www.uol.com.br"        
    );
    }else{
            $retorno=array(
            "sucesso"=> false,
            "msgError"=>"Login e/ou Senha invalido(s)."    
            );
         }
   





echo json_encode($retorno);


