<?php
//Banco Local
//$host="localhost";


//$user = "root";
//$pass = "clara02";
//$banco = "local";

//Banco Online

$host="br-cdbr-azure-south-a.cloudapp.net";
$user = "b3f91ce1a3a776";
$pass = "a4fc577d353d382";
$banco = "helpsystemdb";

mysql_connect($host, $user,$pass) or die("BANCO NAO CONECTOU");
mysql_select_db($banco)or die("nao selecionou banco");
?>