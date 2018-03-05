<?php
    /**
     * Created by Jocimar.
     * User: jocimar
     * Date: 09/02/18
     * Time: 15:11
     * SON:- PHP - Avancando com OO - code_06_install_pimple (Instalando o Pimple)
     */

    namespace Source;

    class Conn implements IConn
    {
        // Atributos Privados
        private $dsn;
        private $user;
        private $pass;

        // Metodo Construtor da classe
        public function __construct($dsn, $user, $pass)
        {
            // Atribuir os parametros recebidos para os atributos da classe
            $this->dsn = $dsn;
            $this->user = $user;
            $this->pass = $pass;
        }

        // Metodo Abstrato obrigatorio para classes que implementam uma interface
        public function connect()
        {
            // Retorno da conexao com o banco de dados
            return new \PDO($this->dsn,$this->user,$this->pass);
        }
    }