<?php

include_once "../class/Usuario.class.php";
include_once "../class/UsuarioDAO.class.php";
$id=$_GET["id"];

$objUsuarioDAO = new UsuarioDAO();

$retorno = $objUsuarioDAO->excluir($id);

if($retorno)
    header ("location:listar.php?EditadoOk");
else
    header ("location:listar.php?EditadoN");



?>