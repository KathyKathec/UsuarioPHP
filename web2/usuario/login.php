<html>
<head></head>
<body>

<?php
    if(isset($_GET["erroEmail"])){
        echo "Email nao cadastrado.";
    }
        
    if(isset($_GET["erroSenha"])){
        echo "Senha incorreta.";
    }

?><br><br>
<br><br><br><?php
?>



    <form action="login_ok.php" method="POST">
        Email: <input type="email" name="email">
                <br/>
        Senha: <input type="password" name="senha">
                <br/>
        <button type="submit">Enviar</button>

    </form>    

</body>



</html>