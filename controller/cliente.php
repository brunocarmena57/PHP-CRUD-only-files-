<?php
/* O controller é responsável por receber as requisições das views e processa-las, somente o controller pode acessar diretamente a camada de Model, para isso é necessário utilizar um require para termos acesso as funções do model
*/
require_once("./model/clienteDAO.php");

/* 
    As funções do controller precisam pegar as requisições da view, aplicar as regras de negócio quando e se necessário, e então envia-las para o model, e se necessário retornar para a view 
*/
function listarClientes(){
    return listarClientesDAO();
    
}

function cadCliente($cliente){
    //Aqui é onde precisamos fazer as nossas validações
    cadClienteDAO($cliente);
}


function deletaCliente($id){
    delClienteDAO($id);
    //header("Location: ") serve para redirecionar a página
    header("Location:./?p=home");
}


function buscaCliente($id){
    return buscarClienteDAO($id);
}

function alterarCliente($cliente, $id){
    //Para fazermos as alterações é necessário passar o id nesta linha esatmos utilizando o += para adicionar uma chave em nosso array
    $cliente += array("id" => $id);
    altClienteDAO($cliente);
}