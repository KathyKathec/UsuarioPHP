<?php

include_once "../class/Usuario.class.php";
include_once "../class/UsuarioDAO.class.php";
$id=$_GET["id"];

$objUsuarioDAO = new UsuarioDAO();

$retorno = $objUsuarioDAO->retornarUnico($id);

?>

<html>
    <head></head>
    <body>
        <form action="editar_ok.php" method="POST">
            Nome: <input type="text" name="nome"
            value="<?=$retorno['nome']?>"/>
            <br/>
            Email: <input type="text" name="email"
            value="<?=$retorno['email']?>"/>
            <br/>
            <input type="hidden" name="id"
            value="<?=$retorno['id']?>"/>
            <br/>
            <button type="submit">Enviar</button>
        </form>


    </body>



</html>