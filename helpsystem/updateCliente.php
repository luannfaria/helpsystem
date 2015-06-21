<?php

include_once 'includes/Cliente-class.php';
include 'includes/ClienteDAO.php';
$id = $_POST["id"];
$nome=$_POST["nome"];
$cpf=$_POST["cpf"];
$rua=$_POST["rua"];
$bairro=$_POST["bairro"];
$numero=$_POST["numero"];
$cidade=$_POST["cidade"];
$telefone=$_POST["telefone"];
$cep=$_POST["cep"];

$cliente = new Cliente();
$clienteDao = new ClienteDAO();
$cliente->setId($id);
$cliente->setBairro($bairro);
$cliente->setCep($cep);
$cliente->setCpf($cpf);
$cliente->setCidade($cidade);
$cliente->setNome($nome);
$cliente->setNumero($numero);
$cliente->setRua($rua);
$cliente->setTelefone($telefone);
$retorno;
if($clienteDao->updateCliente($cliente)){
   $retorno = array(
    "mensagem"=>"Alteração feita com sucesso!",
    
); 
   
}else if(mysql_error()) {

$retorno = array(
    "mensagem"=>"Não foi possível alterar o cliente!",
    
);
}

echo json_encode($retorno);
