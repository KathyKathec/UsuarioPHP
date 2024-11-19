<?php

include_once "../class/Usuario.class.php";
include_once "../class/UsuarioDAO.class.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];


//echo $nome." - ".$email." - ".$senha;

$objUsuario = new Usuario();
$objUsuario->setNome($nome);
$objUsuario->setEmail($email);
$objUsuario->setSenha($senha);

$objUsuarioDAO = new UsuarioDAO();
$retorno = $objUsuarioDAO->inserir($objUsuario);

if($retorno)
echo "<h2> Inserido con sucesso </h2>";
else
echo "<h2>Erro ao inserir</h2>"




?>
