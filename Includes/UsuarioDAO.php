<?php
include_once 'includes/Usuario-class.php';
include "includes/Conexao.php";

class UsuarioDAO{
public function Inserir(Usuario $usuario) {
    try{
        
     $banco = new Conexao();
     $conexao=$banco->conectar();
     
     $sql="Insert into usuario values(:id,:login,:senha)";
     $preparar_sql = $conexao->prepare($sql);
     $preparar_sql->bindValue(":id", $usuario->getId());
     $preparar_sql->bindValue(":login", $usuario->getLogin());
     $preparar_sql->bindValue(":senha", $usuario->getSenha());
     
     return $preparar_sql->execute();
    }  catch (PDOException $e){
        echo $e->getMessage();
    }
    
    }
    
       public function GetUsuario($login,$senha){
       try { 
           
           
     $banco = new Conexao();
    
     $conexao=$banco->conectar();     
     $sql="select * from usuario where login =:login and senha=:senha";
        
     $preparar_sql=$conexao->prepare($sql);
     
     $preparar_sql->bindValue(":login", $login);
     $preparar_sql->bindValue(":senha", $senha);
     $preparar_sql->execute();
       }catch(PDOException $e){
        echo $e->getMessage();
           
       }
       $lista = $preparar_sql->fetchAll(PDO::FETCH_OBJ);
     return $this->ListarDados($lista);
    }
    
    
    //Método para transferir os dados para o objeto CLiente
   private function ListarDados($lista){
        
        $usuario = new Usuario();
        foreach ($lista as $listar ){
        $usuario->setId ($listar->id);
        $usuario->setLogin($listar->login);
        $usuario->setSenha($listar->senha);
                
        }
        
        return $usuario;
    }
    
    
    
}
?>

