<?php
include_once 'conexao.php';

$nome= $_POST["login"];
$senha = $_POST["senha"];
        $logar = mysql_query("SELECT * FROM usuario WHERE login='$nome' AND senha='$senha'") or die("erro ao selecionar");

if (strlen($senha)< 1)
echo '<p align="center"-->Usuario ou senha não conferem<br><a href="javascript:history.back(1);">tente novamente</a><p></p>';

elseif (mysql_num_rows($logar)>0 ){
header("location:inicial.html");

} 
else {

echo '<p align="center">usuario ou senha não conferem<br><a href="javascript:history.back(1);">tente novamente</a></p>';

}
?>