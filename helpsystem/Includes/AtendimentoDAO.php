<?php

include_once 'Includes/Atendimento-class.php';
include "Conexao.php";

class AtendimentoDAO {

    //Funcão para inserir os atendimentos
    public function Inserir(Atendimento $atendimento) {

        $id = $atendimento->getId();
        $cliente = $atendimento->getClienteId();
        $usuario_id = $atendimento->getId_usuario();
        $data = $atendimento->getData();
        $observacao = $atendimento->getObservacao();
        $status = $atendimento->getStatus();
        $titulo = $atendimento->getTitulo();

        $query = mysql_query("Insert into Atendimento values ('$id','$cliente','$usuario_id','$titulo','$data','$observacao','$status')") or die("erro ao Cadastrar");

        return $query;
    }

    // Função para atualizar os atendimentos
    public function UpdateAbrirFecharAtendimento(Atendimento $atendimento, $nStatus, $nObservacao) {
        $id = $atendimento->getId();
        $status = $nStatus;

        $query = mysql_query("UPDATE atendimento SET status='$status',observacao='$nObservacao' where id='$id'") or die("erro ao Atualizar");

        //retorna se as linhas foram afetadas ou não
        return mysql_affected_rows();
    }

    //Função para buscar um atendimento especifico
    public function buscaById($id) {

        $query = mysql_query("SELECT * from atendimento where id='$id'") or die("erro ao Buscar");


        while ($row = mysql_fetch_object($query)) {
            $atendimento = new Atendimento();
            $atendimento->setId($row->id);
            $atendimento->setClienteId($row->cliente);
            $atendimento->setData($row->data);
            $atendimento->setObservacao($row->observacao);
            $atendimento->setStatus($row->status);
            $atendimento->setTitulo($row->titulo);
            $atendimento->setId_usuario($row->id_usuario);
        }

        return $atendimento;
    }

    //Função para buscar todos os atendimentos por  status
    public function buscaPorStatus($status) {
        if ($status =="") {
             $query = mysql_query("select at.id,cl.nome as cliente,us.login as atendente,at.titulo,at.data,at.observacao,at.status from atendimento at join cliente cl on cl.id = at.id_cliente join usuario us on us.id=at.id_usuario") or die("erro ao Buscar");
        } else {
            $query = mysql_query("select at.id,cl.nome as cliente,us.login as atendente,at.titulo,at.data,at.observacao,at.status from atendimento at join cliente cl on cl.id = at.id_cliente join usuario us on us.id=at.id_usuario where status='$status'") or die("erro ao Buscar");
        }

        //Instanciando a lista ou Array de objetos do tipo atendimento
        $atendimentos = array();

        while ($row = mysql_fetch_assoc($query)) {
            $atendimentos[] = $row;
        }

        return $atendimentos;
    }

}
