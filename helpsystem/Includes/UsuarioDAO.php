<?php
include_once 'includes/Usuario-class.php';
include "Conexao.php";

class UsuarioDAO{
    /**
     *@access public
     * @param $usuario 
     * 
     */
    
    //Função para Inserir os usuários   
    public function Inserir(Usuario $usuario) {
    
    $id= $usuario->getId();
    $login=$usuario->getLogin();
    $senha=$usuario->getSenha();
    
   $query=mysql_query("insert into usuario(login,senha) values('$login','$senha')")  ;
    
     return $query; 
    
    }
    
    //Função para buscar o usuário
    public function GetUsuario($login,$senha){
       
           
        $query=mysql_query("SELECT * FROM usuario WHERE login='$nome' AND senha='$senha'") or die("erro ao selecionar");
       return $query;
    }
    
    
    
 
}
?>

