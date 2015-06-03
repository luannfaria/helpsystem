<?php


session_start();

if(!isset ($_SESSION['validado']) == true){
     unset($_SESSION['validado']);
    $retorno = array(
        "validado"=> false,
        "urlRetorno"=>"errorSession.html"
        
    );
    
   
    
}else{
   
     $retorno = array(
      "validado"=> TRUE
         );
   
    
}

echo json_encode($retorno);


