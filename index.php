<?php

include "Includes/Cliente-class.php";
include "Includes/ClienteDAO.php";

$Cliente = new Cliente();
$ClienteResposta = new Cliente();



$Cliente->setId(3);
$Cliente->setNome("Luuan");
$Cliente->setCpf("888575258");
$Cliente->setTelefone("87452985");
$Cliente->setRua("avenida infinito");
$Cliente->setNumero(52);
$Cliente->setBairro("Arvore Grande");
$Cliente->setCidade("Pouso Alegre");
$Cliente->setCep("37550000");


$ClienteDao = new ClienteDAO();

echo $ClienteDao->Inserir($Cliente);


$ClienteResposta = $ClienteDao->GetId(1);

echo "Nome é ".$ClienteResposta->getNome();

?>
 




