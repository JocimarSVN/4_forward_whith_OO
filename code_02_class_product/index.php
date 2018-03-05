<?php
    /**
     * Created by Jocimar.
     * User: jocimar
     * Date: 09/02/18
     * Time: 14:32
     * SON:- PHP - Avancando com OO - Class Product
     */

    require_once "Product.php";

    // Criacao da conexao com o banco de dados (maneira mais simples)
    $db = new \PDO("mysql:host=localhost;dbname=test_oo","root","1234");

    $product = new Product($db);

    // Litagem dos produtos da tabela atraves de um Array Associativo
    $list = $product->list();

    // Exibicao dos valores da lista no navegador
    var_dump ($list);