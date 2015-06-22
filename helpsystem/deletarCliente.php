<?php
include 'includes/ClienteDAO.php';
 
$id = $_POST["id"];


$clienteDao = new ClienteDAO();
$retorno;

if($clienteDao->deletarCliente($id)){
         $retorno ="Cliente removido com sucesso!";
   }else{   
      $retorno = "Não foi possivel remover o cliente!";   

} if(mysql_error()){
     $retorno ="Não foi possivel remover o cliente Exclua o atendimento!";
    
}



 
        
echo $retorno;
        

