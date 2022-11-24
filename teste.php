<?php
session_start();
// Criação das cookies e adicionado os timer
setcookie("numero[um]", "Valor1", time()+3600);
setcookie("numero[dois]", "Valor2", time()+3600);

// Nome da cookie
$_COOKIE["nome"] = "meu cookie";

echo $_COOKIE["nome"];

echo "<hr>";

echo time();

echo "<hr>";

echo $_COOKIE["numero"]["um"]."<br>";

echo $_COOKIE["numero"]["dois"]."<br>";

$_SESSION["minhasessao"] = "Conteúdo da Minha sessao";

echo $_SESSION["minhasessao"];

// Cookie com incremento mostrado na tela
if(isset($_SESSION["soma"])){
    if($_SESSION["soma"] > 10){
        unset($_SESSION["soma"]);
    }else{
        $_SESSION["soma"]++;
        echo "<br>A soma é ".$_SESSION["soma"];
    }

}else{
    $_SESSION["soma"] = 0;
}

echo "<hr>";
// Inserção do email com validação
$email = "bruno.carmena@gmail.com";

echo filter_var($email, FILTER_VALIDATE_EMAIL)?"Email é valido": "Email Inválido";

echo "<br>";

$cpf = "822.291.283-22";
echo "$cpf";
echo "<br>";
//$cpf = str_replace(".","/","-","_"," "),"", $cpf);

$cpf= trim($cpf);
var_dump($cpf);
echo "<br>";
echo strlen($cpf);

echo "<br>";
echo strstr($cpf,".");
echo "<br>";
echo substr($cpf, 0, 3);









?>
