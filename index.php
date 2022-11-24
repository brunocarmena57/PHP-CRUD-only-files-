<?php
session_start();

if(isset($_GET["logout"])) {
    unset($_SESSION["user"]);
}

if(!isset($_SESSION["user"])) {
    echo "Usuário não logado!";
    header("Location:./login.php");
}

$_SESSION["access"] = true;
?>


<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CRUD PHP</title>
</head>
<body>
<?php
    echo "Usuário logado".$_SESSION["user"];
    ?>
    <a href="?logout">Logout</a>
    <?php
    echo "<hr>";

    // Trazer Menú
    require_once("./menu.php");
    isset($_GET["p"])? $page = $_GET["p"] : $page = "home";
    
    // Cases para mudar de página
    switch($page){
        case "home":
            require_once("./view/listarCliente.php");
        break;
        case "cad":
            require_once("./view/cadCliente.php");
        break;
        case "alt":
            require_once("./view/alterarCliente.php");
        break;
    }
?>
</body>
</html>
