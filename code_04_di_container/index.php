<?php
    /**
     * Created by Jocimar.
     * User: jocimar
     * Date: 09/02/18
     * Time: 14:57
     * SON:- PHP - Avancando com OO - Service Container
     */

    require_once "IConn.php";
    require_once "Conn.php";
    require_once "Product.php";
    require_once "Container.php";

    $db = Container::getConn ();

    $product = Container::getProduct ();

    // Litagem dos produtos da tabela atraves de um Array Associativo
    $list = $product->list();

    // Exibicao dos valores da lista no navegador
    var_dump ($list);