<?php

class Cliente{
    
  private $id;
 private $nome; 
 private $cpf ;
 private $telefone;
 private $rua;
 private $numero;
 private $bairro;
 private $cidade;
 private $cep;
 
    public function __get($atrib){
    return $this->$atrib;
    
}
    public function __set($atrib, $value){
          $this->$atrib = $value;
      }
    
}




?>

