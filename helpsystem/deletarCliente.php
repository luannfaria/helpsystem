<?php
include 'includes/ClienteDAO.php';

$id = $_POST["id"];


$clienteDao = new ClienteDAO();


        $retorno = array(
    "mensagem"=>"foi no php",
    
);
        
echo json_encode($retorno);
        

