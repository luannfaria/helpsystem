<?php

class Cidade{
    private $id;
    private $nome;
    private $estado;
    private $cep;
    
    
    //Lista de getters and setters
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCep() {
        return $this->cep;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }


}

?>

