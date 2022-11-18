<?php
require_once("./controller/cliente.php");
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Aula de Banco de Dados</title>
</head>
<body>
    <?php
    if (isset($_POST["nome"])){
        cadCliente($_POST);
    }

    ?>
    
    <form action="./?p=cad" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome"><br>

        <label for="sobrenome">Sobrenome: </label>
        <input type="text" name="sobrenome"><br>

        <label for="ddd">DDD: </label>
        <input type="text" name="ddd"><br>

        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone"><br>

        <input type="submit">
    </form>

</body>
</html>