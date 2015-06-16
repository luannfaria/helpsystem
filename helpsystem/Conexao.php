<?php
$host="localhost";
//Banco Local

$user = "root";
$pass = "clara02";
$banco = "local";

//Banco Online

//$user = "root";
//$pass = "clara02";
//$banco = "local2";

mysql_connect($host, $user,$pass) or die("BANCO NAO CONECTOU");
mysql_select_db($banco)or die("nao selecionou banco");
?>