<?php
    /**
     * Created by Jocimar.
     * User: Jocimar
     * Date: 15/01/18
     * Time: 09:07
     */

/*
    // PHP - Avancando com OO - Listando registros com PDO

    // Maneira mais simples de exibir uma listagem do db diretamente do index.php

    // Criacao da conexao com o banco de dados (maneira mais simples)
    $db = new \PDO("mysql:host=localhost;dbname=test_oo","root","1234");

    // Criacao de uma consulta ao db que trara todos os produtos
    $query = "Select * from products";

    // Preparacao da conexao
    $stmt = $db->prepare ($query);

    // Execucao da conexao
    $stmt->execute ();

    // Litagem dos produtos da tabela atraves de um Array Associativo
    $list = $stmt->fetchAll (\PDO::FETCH_ASSOC);

    // Exibicao dos valores da lista no navegador
    var_dump ($list);
*/


    /*
    require_once "IConn.php";
    require_once "Conn.php";
    require_once "Container.php";

    $dsn = "mysql:host=localhost;dbname=test_oo";
    $user = "root";
    $pass = "1234";

    try
    {
        // Criacao da conexao com o Banco de dados
        $db = Container::getConn ();

        // Criando um objeto da classe Product
        $products = Container::getProduct ();

        // a varialvel $list recebe os produtos via list()
        $list = $products->list();

    }
    Catch(PDOException $e)
    {
        echo "Erro gerado: " . $e->getMessage();
    }

    // Exibi os registros no Navegador
    var_dump($list);
    */