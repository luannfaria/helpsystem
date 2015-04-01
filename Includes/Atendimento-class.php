<?php
class Atendimento{
    
 private $id;
 private $data;
 private $observacao;
 private $status;
 
 //Métodos Get Set da classe
     public function __get($atrib){
     
          return $this->$atrib;
      }
      
      public function __set($atrib, $value){
          $this->$atrib = $value;
      }
    

}




?>

