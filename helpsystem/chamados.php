<?php
include 'includes/AtendimentoDAO.php';

$atendimentoDAO = new AtendimentoDAO();
$atendimentos =$atendimentoDAO->buscaPorStatus("OFF");

echo json_encode($atendimentos);

