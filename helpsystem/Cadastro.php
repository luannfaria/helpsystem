<?php
include_once 'conexao.php';
$id=0;
$nome = $_POST ['nome'];
$cpformatando = str_replace(".", "", $_POST ['cpf']) ;
$rua = $_POST ['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$cidade=$_POST['cidade'];
$telefone=str_replace("-", "", $_POST ['telefone']) ;
$cep = str_replace("-", "", $_POST ['cep']) ;
$cpf = str_replace("-", "", $cpformatando) ;




if(!($nome)||!($cpf)||!($rua)||!($bairro)||!($numero)||!($cidade)||!($telefone)){
     echo "<script>location.href='cadastrocliente.html'</script>";
    echo "<script>alert('Preencha os campos!')</script>"; 
   
}
//$queryid="select max('id') from cliente";
//$resultid=mysql_query($queryid);

$query ="insert into cliente values ('$id','$nome','$cpf','$telefone','$rua',$numero,'$bairro','$cidade','$cep')";
$insert = mysql_query($query);

if($insert){
    
    echo "<script>alert('Cliente Cadastrado com Sucesso')</script>"; 
    echo "<script>location.href='CLientes.html'</script>";
    	
}else{
    echo "<script>location.href='cadastrocliente.html'</script>";
    echo "<script>alert('Erro Ao Cadastrar')</script>";
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

