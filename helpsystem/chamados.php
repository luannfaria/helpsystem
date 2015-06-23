<?php
include_once 'includes/Atendimento-class.php';
include 'includes/AtendimentoDAO.php';
$atendimentoDAO = new AtendimentoDAO();
     
 
 $chamados = $atendimentoDAO->listarChamados();
  
$json = json_encode((array)$chamados);

 echo $json;


