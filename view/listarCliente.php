<?php
    if(!isset($_SESSION["access"])) {
        header("Location:../login.php");
    }
    require_once("./controller/cliente.php");
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Aula de Banco de Dados</title>
</head>
<body>
<table>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>DDD</th>
            <th>Telefone</th>
            <th>Excluir</th>
            <th>Alterar</th>
        </tr>
    <?php
    $clientes = listarClientes();
    foreach($clientes as $cli){
        echo "<tr>";
        echo "<td>".$cli["Nome"]."</td>";
        echo "<td>".$cli["Sobrenome"]."</td>";
        echo "<td>".$cli["DDD"]."</td>";
        echo "<td>".$cli["Telefone"]."</td>";
        echo "<td><a href=\"?p=home&deleta=".$cli["ID"]."\"> Excluir </a></td>";
        echo "<td><a href=\"./?p=alt&altera=".$cli["ID"]."\"> Alterar </a></td>";
        echo "</tr>";
    }

    if (isset($_GET["deleta"])){
        deletaCliente($_GET["deleta"]);
    }
    //echo "</table>";
    ?>
    </table>
    </body>
</html>