<?php
include_once 'includes/Cliente-class.php';
include 'includes/ClienteDAO.php';
$clienteDAO = new ClienteDAO();
     
 
 $clientes = $clienteDAO->listarClientes();
  
$json = json_encode((array)$clientes);

 echo $json;



