<?php
session_start();
if(isset($_SESSION["[login]"])){
    header("location:login.php")
}

include_once "../class/Usuario.class.php";
include_once "../class/UsuarioDAO.class.php";

$objUsuarioDAO = new UsuarioDAO();
$retorno = $objUsuarioDAO->listar();
//echo "<pre>";



?>

<html>
    <head></head>
<body>
    <?php
    if (isset ($_GET["EditadoOk"])){
        echo "Editado com sucesso";
    }
    if (isset ($_GET["EditadoN"])){
        echo "Erro ao editar";
    }
    if (isset ($_GET["ExcluirOk"])){
        echo "Excluido com sucesso";
    }
    if (isset ($_GET["ExcluirN"])){
        echo "Erro ao excluir";
    }
    ?>
    


    <table border>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th colspan=2>Ações</th>
        </thead>
        <tbody>
            <?php
            foreach($retorno as $linha){
                ?>
                <tr>
                    <td><?=$linha["id"];?></td>
                    <td><?=$linha["nome"];?></td>
                    <td><?=$linha["email"];?></td>
                    <td><a href="editar.php?id=<?=$linha["id"];?>">Editar </a></td>
                    <td><a href="excluir.php?id=<?=$linha["id"];?>">Excluir </a></td>
            </tr>
            <?php

            }
            ?>
        </tbody>


    </table>
</body>

</html>