<?php
include_once 'includes/Usuario-class.php';
include_once 'Includes/UsuarioDAO.php';


/*$usuario = new Usuario();
$usuarioResultado = new Usuario();



$usuario->setId(1);
$usuario->setLogin("Isnack");
$usuario->setSenha("1234");



$usuarioDao = new UsuarioDAO();

 $usuarioDao->Inserir($usuario);*/
$usuarioDao = new UsuarioDAO();

$usuarioResultado = $usuarioDao->GetUsuario("Isnack", "1234");



var_dump($usuarioResultado);

?>
 




