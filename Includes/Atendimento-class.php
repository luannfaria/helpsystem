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
    
      function getId() {
          return $this->id;
      }

      function getData() {
          return $this->data;
      }

      function getObservacao() {
          return $this->observacao;
      }

      function getStatus() {
          return $this->status;
      }

      function setId($id) {
          $this->id = $id;
      }

      function setData($data) {
          $this->data = $data;
      }

      function setObservacao($observacao) {
          $this->observacao = $observacao;
      }

      function setStatus($status) {
          $this->status = $status;
      }


}




?>

