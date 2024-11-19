<?php

include_once "../class/Usuario.class.php";
include_once "../class/UsuarioDAO.class.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$id = $_POST["id"];


//echo $nome." - ".$email." - ".$senha;

$objUsuario = new Usuario();
$objUsuario->setNome($nome);
$objUsuario->setEmail($email);
$objUsuario->setId($id);

$objUsuarioDAO = new UsuarioDAO();
$retorno = $objUsuarioDAO->editar($objUsuario);


if($retorno)
    header ("location:listar.php?EditadoOk");
else
    header ("location:listar.php?EditadoN");




?>
