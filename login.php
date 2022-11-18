<?php
session_start();
$user = "teste";
$password = password_hash("123", PASSWORD_DEFAULT);

if(isset($_SESSION["user"])) {
    header("Location:./index.php");

}


if(isset($_POST["user"])) {
    if($_POST["user"] == $user &&
     password_verify($_POST["password"], $password))
    {
        $_SESSION["user"] = $_POST["user"];
        $_SESSION["password"] = $_POST["password"];
        echo "Usuário logado!<br>";
        header("Location:./index.php");
    } else {
        echo "Usuário ou senha inválidos<br>";

    }
}


?>

<form method="post">
    Usuário: <input type="text" name="user"><br>
    Senha: <input type="password" name="password"><br>
    <input type="submit">
</form>