<?php
include_once 'conexao.php';
$id=5;
$nome = $_POST ['nome'];
$cpf = $_POST ['cpf'];
$rua = $_POST ['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$cidade=$_POST['cidade'];
$telefone=$_POST['telefone'];
$cep = $_POST['cep'];



if(!($nome)||!($cpf)||!($rua)||!($bairro)||!($numero)||!($cidade)||!($telefone)){
    
    echo "<script>alert('Preencha os campos!')</script>";
}
$query ="insert into cliente values (5,'$nome','$cpf','$telefone','$rua',$numero,'$bairro','$cidade','$cep')";
$insert = mysql_query($query);

if($insert){
    
    echo "<script>alert('Cliente Cadastrado com Sucesso')</script>"; 
}else{
    echo "<script>alert('Erro Ao Cadastrar')</script>";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

