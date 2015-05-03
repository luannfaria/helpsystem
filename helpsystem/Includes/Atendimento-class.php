<?php
class Atendimento{
    
 private $id;
 private $ClienteId;
 private $data;
 private $observacao;
 private $status;
 function getClienteId() {
     return $this->ClienteId;
 }

 function setClienteId($ClienteId) {
     $this->ClienteId = $ClienteId;
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

