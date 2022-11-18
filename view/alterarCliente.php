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
    if (isset($_GET["altera"])){
        $cliente = buscaCliente($_GET["altera"]);

        $id = $cliente["ID"];
        $nome = $cliente["Nome"];
        $sobrenome = $cliente["Sobrenome"];
        $ddd = $cliente["DDD"];
        $telefone = $cliente["Telefone"];
    }
    if (isset($_GET["alt"])){

        alterarCliente($_POST, $_GET["alt"]);
        header("Location:index.php");
    }

    ?>

    <form action="<?= isset($nome)? "./?p=alt&alt=$id" : "" ?>" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" value="<?= isset($nome)? $nome: "" ?>"><br>

        <label for="sobrenome">Sobrenome: </label>
        <input type="text" name="sobrenome" value="<?= isset($nome)? $sobrenome: "" ?>"><br>

        <label for="ddd">DDD: </label>
        <input type="text" name="ddd" value="<?= isset($nome)? $ddd: "" ?>"><br>

        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone" value="<?= isset($nome)? $telefone: "" ?>"><br>

        <input type="submit">
    </form>

</body>
</html>