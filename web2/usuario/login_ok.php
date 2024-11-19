<?php

include_once "../class/Usuario.class.php";
include_once "../class/UsuarioDAO.class.php";

$email=$_POST["email"];
$senha=$_POST["senha"];

$objUsuario - new Usuario();
$objUsuario->setEmail(valor: $email);
$objUsuario->setSenha(valor: $senha);


$objUsuarioDAO= new UsuarioDAO();
$retorno= $objUsuarioDAO->login(usuario: $objUsuario);
if($retorno==0){
    header(header:"location:login.php?erroEmail");
}else if($retorno==1){
    header(header:"location:login.hp?erroSenha");

}else{
    session_start();
    $_SESSION["login"] = true;
    $_SESSION["id"] = $retorno["id"];
    $_SESSION["nome"] = $retorno["nome"];
    header(header:"location:listar.php");
    
    
}





<?
