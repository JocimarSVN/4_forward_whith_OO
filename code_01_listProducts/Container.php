<?php
    /**
     * Created by Jocimar.
     * User: Jocimar
     * Date: 17/01/18
     * Time: 16:55
     */

    class Container
    {
        public static function getProduct()
        {
            return new Product(self::getConn ());
        }

        public static function getConn()
        {
            return new Conn("mysql:host=localhost;dbname=test_oo");
        }
    }