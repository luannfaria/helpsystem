<?php

include_once 'includes/Cliente-class.php';
include "Conexao.php";

class ClienteDAO {

    //Função para inserir cliente
    public function Inserir(Cliente $cliente) {
        $id = $cliente->getId();
        $bairro = $cliente->getBairro();
        $cep = $cliente->getCep();
        $cidade = $cliente->getCidade();
        $cpf = $cliente->getCpf();
        $nome = $cliente->getNome();
        $numero = $cliente->getNumero();
        $rua = $cliente->getRua();
        $telefone = $cliente->getTelefone();

        $query = mysql_query("Insert into cliente values('$id','$nome','$cpf','$telefone','$rua','$numero','$bairro','$cidade','$cep')") or die("erro ao selecionar");

        return $query;
    }

    //Função para buscar um cliente específico
    public function GetId($id) {


        $query = mysql_query("SELECT * from cliente where id='$id'") or die("erro ao selecionar");
        $cliente = new Cliente();
        while ($row = mysql_fetch_object($query)) {
            $cliente->setBairro($row->bairro);
            $cliente->setCep($row->cep);
            $cliente->setCidade($row->cidade);
            $cliente->setCpf($row->cpf);
            $cliente->setId($row->id);
            $cliente->setNome($row->nome);
            $cliente->setNumero($row->numero);
            $cliente->setRua($row->rua);
            $cliente->setTelefone($row->telefone);
        }
        return $cliente;
    }

    //Lista de clientes popular cliente
    public function listarClientes() {

        $query = mysql_query("SELECT * from cliente") or die("erro ao Buscar");

        //Instanciando a lista ou Array de clientes
        $clientes = array();
        while ($row = mysql_fetch_assoc($query)) {
            $clientes[] = $row;
        }

        return $clientes;
    }

}
?>

