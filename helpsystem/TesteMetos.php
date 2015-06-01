<?php
include_once 'includes/Usuario-class.php';
include_once 'includes/Cliente-class.php';
include_once'includes/Atendimento-class.php';
include 'includes/UsuarioDAO.php';
include 'includes/ClienteDAO.php';
include 'includes/AtendimentoDAO.php';


//$atendimentoDao = new AtendimentoDAO();
$usuario = new Usuario();

$usuarioDao = new UsuarioDAO();

$usuario->setLogin("isnack3");
$usuario->setSenha(1234);
if($usuarioDao->Inserir($usuario)){
   echo "deu certo"; 
}

/*$cliente = new Cliente();

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
 * */
 
 //$atendimento = new Atendimento();

 
/*$clienteDAO = new ClienteDAO();
     
    // echo"ok";
 //}
 $clientes = $clienteDAO->listarClientes();
  
$json = json_encode((array)$clientes);

 echo $json;*/







      