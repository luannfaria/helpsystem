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
 
  
    
    public function getId(){
    return $this->id;
    
    }

    public function setId($id){
          $this->id = $id;
    }
      
    public function getNome(){
    return $this->nome;
    
    }

    public function setNome($nome){
          $this->nome = $nome;
    }
    
    public function getCpf(){
    return $this->cpf;
    
    }

    public function setCpf($cpf){
          $this->cpf = $cpf;
    }
    
    public function getTelefone(){
    return $this->telefone;
    
    }

    public function setTelefone($telefone){
          $this->telefone = $telefone;
    }
      
    public function getRua(){
    return $this->rua;
    
    }

    public function setRua($rua){
          $this->rua = $rua;
    }
    
    public function getNumero(){
    return $this->numero;
    
    }

    public function setNumero($numero){
          $this->numero = $numero;
    }
    
    public function getBairro(){
    return $this->bairro;
    
    }

    public function setBairro($bairro){
          $this->bairro = $bairro;
    }
    public function getCidade(){
    return $this->cidade;
    
    }

    public function setCidade($cidade){
          $this->cidade = $cidade;
    }
    
    public function getCep(){
    return $this->cep;
    
    }

    public function setCep($cep){
          $this->cep = $cep;
    }
}




?>

