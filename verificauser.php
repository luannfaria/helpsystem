<?php
include_once 'conexao.php';

$nome= $_POST["login"];
$senha = $_POST["senha"];
        $logar = mysql_query("SELECT * FROM usuario WHERE login='$nome' AND senha='$senha'") or die("erro ao selecionar");

if (strlen($senha)< 1)
echo '<p align="center"-->Senha ou apelido não conferem<br><a href="javascript:history.back(1);">tente denovo</a><p></p>';

elseif (mysql_num_rows($logar)>0 ){
header("location:inicial.html");

} 
else {

echo '<p align="center">Senha ou apelido não conferem<br><a href="javascript:history.back(1);">tente denovo</a></p>';

}
?>