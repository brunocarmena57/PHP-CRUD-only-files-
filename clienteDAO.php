<?php

function conectaDB(){
    //Criando uma conexão com o banco de dados
    return new PDO("mysql:host=localhost;dbname=aulaphpbrunor", "root", "");
}

// Inserta os valores no banco de dados table clientes
function cadClienteDAO($cliente){
    $pdo = conectaDB();
    $sql = $pdo->prepare("INSERT INTO clientes VALUES(null, ?,?,?,?)");
    $sql->execute(array_values($cliente));
}

// Função alterar clientes
function altClienteDAO($cliente){
    $pdo = conectaDB();
    $pdo->exec('UPDATE clientes SET
    nome= "'.$cliente["nome"].'",
    sobrenome= "'.$cliente["sobrenome"].'",
    ddd= "'.$cliente["ddd"].'",
    telefone= "'.$cliente["telefone"].'"
    WHERE id= '.$cliente["id"]
    );
}

// Função deletar clientes
function delClienteDAO($id){
    $pdo = conectaDB();
    $pdo->exec("DELETE FROM clientes WHERE id=$id");
    echo "Clientes deletado com sucesso";
}

//Função listar Clientes
function listarClientesDAO(){
    $pdo = conectaDB();
    $sql = $pdo->prepare("SELECT * FROM clientes");
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}

//Função buscar clientes
function buscarClienteDAO($id){
    $pdo = conectaDB();
    $sql = $pdo->prepare("SELECT * FROM clientes WHERE id= ?");
    $sql->execute(array($id));
    return $sql->fetch(PDO::FETCH_ASSOC);
}
