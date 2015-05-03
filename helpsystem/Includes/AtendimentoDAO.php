<?php

include_once 'Includes/Atendimento-class.php';
include "Conexao.php";

class AtendimentoDAO {

    public function Inserir(Atendimento $atendimento) {

        $id = $atendimento->getId();
        $cliente = $atendimento->getClienteId();
        $data = $atendimento->getData();
        $observacao = $atendimento->getObservacao();
        $status = $atendimento->getStatus();

        $query = mysql_query("Insert into Atendimento values ('$id','$cliente','$data','$observacao','$status')") or die("erro ao Cadastrar");

        return $query;
    }

    public function UpdateAbrirFecharAtendimento(Atendimento $atendimento, $nStatus) {
        $id = $atendimento->getId();
        $status = $nStatus;

        $query = mysql_query("UPDATE atendimento SET status='$status' where id='$id'") or die("erro ao Atualizar");

        //retorna se as linhas foram afetadas ou não
        return mysql_affected_rows();
    }

    public function buscaById($id) {

        $query = mysql_query("SELECT * from atendimento where id='$id'") or die("erro ao Buscar");


        while ($row = mysql_fetch_object($query)) {
            $atendimento = new Atendimento();
            $atendimento->setId($row->id);
            $atendimento->setClienteId($row->cliente);
            $atendimento->setData($row->data);
            $atendimento->setObservacao($row->observacao);
            $atendimento->setStatus($row->status);
        }

        return $atendimento;
    }

    public function buscaPorStatus($status) {

        $query = mysql_query("SELECT * from atendimento where status='$status'") or die("erro ao Buscar");


        //Instanciando a lista ou Array de objetos do tipo atendimento
        $atendimentos = array();

        while ($row = mysql_fetch_object($query)) {
            $atendimento = new Atendimento();
            $atendimento->setId($row->id);
            $atendimento->setClienteId($row->cliente);
            $atendimento->setData($row->data);
            $atendimento->setObservacao($row->observacao);
            $atendimento->setStatus($row->status);

            //alocando objeto no array

            $atendimentos[] = $atendimento;
        }

        return $atendimentos;
    }

}
