<?php
include_once 'includes/Usuario-class.php';
include_once 'includes/Cliente-class.php';
include 'includes/UsuarioDAO.php';
include 'includes/ClienteDAO.php';



/*$usuario = new Usuario();

$usuarioDao = new UsuarioDAO();
$usuario->setId(2);
$usuario->setLogin("Logan");
$usuario->setSenha(1234);
$usuarioDao->Inserir($usuario);
*/
$cliente = new Cliente();

$clienteDAO = new ClienteDAO();

$cliente->setBairro("Centro");
$cliente->setCep("37550000");
$cliente->setCidade("Pa");
$cliente->setCpf("85742578542");
$cliente->setId(6);
$cliente->setNome("Teste Myslq");
$cliente->setNumero("10");
$cliente->setRua("rua 2");
$cliente->setTelefone("85742471");

$clienteDAO->Inserir($cliente);