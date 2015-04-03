<?php

include "Includes/Cliente-class.php";
include "Includes/ClienteDAO.php";

$Cliente = new Cliente();

$Cliente->setId(2);
$Cliente->setNome("Luuan");
$Cliente->setCpf("888575258");
$Cliente->setTelefone("87452985");
$Cliente->setRua("avenida infinito");
$Cliente->setNumero(52);
$Cliente->setBairro("Arvore Grande");
$Cliente->setCidade("Pouso Alegre");
$Cliente->setCep("37550000");

echo var_dump($Cliente);
$ClienteDao = new ClienteDAO();

echo $ClienteDao->Inserir($Cliente);
 




