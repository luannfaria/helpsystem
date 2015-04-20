<?php
include_once 'includes/Usuario-class.php';
include_once 'Includes/UsuarioDAO.php';

//Recuperando os dados do javascript
//$login = $_POST["login"];
//$senha = $_POST["senha"];


//Instanciando objeto da classe DAO Usuário
$usuarioDao = new UsuarioDAO();

$usuarioResultado = new Usuario();
//Setando e obtendo resultados da consulta
$usuarioResultado = $usuarioDao->GetUsuario("Isnack", "1234");
$numero = count($usuarioResultado);
$lista =  array('id'=>$usuarioResultado.getId());



//echo json_encode($data);

//echo json_encode("http://www.google.com.br/");
        
echo $numero;