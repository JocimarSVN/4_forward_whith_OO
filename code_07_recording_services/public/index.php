<?php
    /**
     * Created by Jocimar.
     * User: jocimar
     * Date: 09/02/18
     * Time: 14:57
     * SON:- PHP - Avancando com OO - code_06_install_pimple (Instalando o Pimple)
     */

    require_once "../vendor/autoload.php";

    use Pimple\Container;

    $container = new Container();

    $container['conn'] = function () {
        return new \Source\Conn("mysql:host=localhost;dbname=test_oo","root","");
    };

    $container['product'] = function ($c) {
        return new \Source\Product($c['conn']);
    };

    $list = $container['product']->list();

    var_dump($list);