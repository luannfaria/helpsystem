<?php
include_once 'includes/Cliente-class.php';
include "includes/Conexao.php";

class ClienteDAO{
    
    


public function Inserir(Cliente $cliente) {
    try{
        
     $banco = new Conexao();
     $conexao=$banco->conectar();
     
     $sql="Insert into cliente values(:id,:nome,:cpf,:telefone,:rua,:numero,:bairro,:cidade,:cep)";
     $preparar_sql = $conexao->prepare($sql);
     $preparar_sql->bindValue(":id", $cliente->getId());
     $preparar_sql->bindValue(":nome", $cliente->getNome());
     $preparar_sql->bindValue(":cpf", $cliente->getCpf());
     $preparar_sql->bindValue(":telefone", $cliente->getTelefone());
     $preparar_sql->bindValue(":rua", $cliente->getRua());
     $preparar_sql->bindValue(":numero", $cliente->getNumero());
     $preparar_sql->bindValue(":bairro", $cliente->getBairro());
     $preparar_sql->bindValue(":cidade", $cliente->getCidade());
     $preparar_sql->bindValue(":cep", $cliente->getCep());
     return $preparar_sql->execute();
    }  catch (PDOException $e){
        echo $e->getMessage();
    }
    
    }
    
    public function GetId($id){
       try { 
           
           
     $banco = new Conexao();
    
     $conexao=$banco->conectar();     
     $sql="select * from cliente where ID =:id";
        
     $preparar_sql=$conexao->prepare($sql);
     
     $preparar_sql->bindValue(":id", $id);
     $preparar_sql->execute();
       }catch(PDOException $e){
        echo $e->getMessage();
           
       }
       $lista = $preparar_sql->fetchAll(PDO::FETCH_OBJ);
     return $this->ListarDados($lista);
    }
    
   private function ListarDados($lista){
        
        $cliente = new Cliente();
        foreach ($lista as $listar ){
        $cliente->setId ($listar->id);
        }
        
        return $cliente;
    }
}
?>

