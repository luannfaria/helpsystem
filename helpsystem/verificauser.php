<?php
include_once 'conexao.php';
session_start();
$nome= $_POST["login"];
$senha = $_POST["senha"];
        $logar = mysql_query("SELECT * FROM usuario WHERE login='$nome' AND senha='$senha'") or die("erro ao selecionar");

if (strlen($senha)< 1)
	header("location:error.html");
		
elseif (mysql_num_rows($logar)>0 ){
    $_SESSION['validado']='ok';
header("location:inicial.html");

} 
else {

	header("location:error.html");

}
?>