<?php
class Conexao {

    
  
    public  function conectar() {
        try  {   
           $pdo = new PDO('mysql:host=localhost;dbname=local', 'root', 'admin');
        }catch(PDOException $e){
            echo $e->getMessage();
        }
       
        return $pdo;
        
    }

}

?>
