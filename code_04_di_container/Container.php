<?php
    /**
     * Created by PhpStorm.
     * User: jocimar
     * Date: 20/02/18
     * Time: 16:11
     * SON:- PHP - Avancando com OO - Service Container
     */

    class Container
    {
        public static function getProduct()
        {
            return new Product(self::getConn());
        }

        public static function getConn()
        {
            return new Conn("mysql:host=localhost;dbname=test_oo","root","1234");
        }
    }