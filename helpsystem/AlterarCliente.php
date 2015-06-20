<?php

include_once 'includes/Cliente-class.php';
include 'includes/ClienteDAO.php';
//Recuperando valor via post
$clienteId = json_decode($_POST["idCliente"]);

//declarando objetos
$clienteDAO = new ClienteDAO();


$cliente = $clienteDAO->GetId($clienteId);


$json = json_encode($cliente);

echo $json;