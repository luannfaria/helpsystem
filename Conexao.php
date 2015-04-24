<?php
$host="localhost";
$user="root";
$pass="admin";
$banco="local";
mysql_connect($host, $user,$pass) or die("BANCO NAO CONECTOU");
mysql_select_db($banco)or die("nao selecionou banco");
?>