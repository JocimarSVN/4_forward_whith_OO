<?php
    /**
     * Created by Jocimar.
     * User: jocimar
     * Date: 09/02/18
     * Time: 14:57
     * SON:- PHP - Avancando com OO - Interface e Class Conn
     */

    require_once "IConn.php";
    require_once "Conn.php";
    require_once "Product.php";

    $db = new Conn("mysql:host=localhost;dbname=test_oo","root","1234");

    $product = new Product($db);

    // Litagem dos produtos da tabela atraves de um Array Associativo
    $list = $product->list();

    // Exibicao dos valores da lista no navegador
    var_dump ($list);