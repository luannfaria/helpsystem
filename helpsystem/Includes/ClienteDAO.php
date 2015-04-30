<?php
include_once 'includes/Cliente-class.php';
include "Conexao.php";

class ClienteDAO{
    
    


public function Inserir(Cliente $cliente) {
    $id= $cliente->getId();
    $bairro=$cliente->getBairro();
    $cep=$cliente->getCep();
    $cidade=$cliente->getCidade();
    $cpf=$cliente->getCpf();
    $nome=$cliente->getNome();
   $numero=$cliente->getNumero();
   $rua=$cliente->getRua();
   $telefone=$cliente->getTelefone();
    
   $query=mysql_query("Insert into cliente values('$id','$nome','$cpf','$telefone','$rua','$numero','$bairro','$cidade','$cep')") or die("erro ao selecionar");
    echo var_dump($query);
     return $query; 
    
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
    
    
    //Método para transferir os dados para o objeto CLiente
   private function ListarDados($lista){
        
        $cliente = new Cliente();
        foreach ($lista as $listar ){
        $cliente->setId ($listar->id);
        $cliente->setBairro($listar->bairro);
        $cliente->setCep($listar->cep);
        $cliente->setCidade($listar->cidade);
        $cliente->setCpf($listar->cpf);
        $cliente->setNome($listar->nome);
        $cliente->setNumero($listar->numero);
        $cliente->setRua($listar->rua);
        $cliente->setTelefone($listar->telefone);
        
        }
        
        return $cliente;
    }
}
?>

