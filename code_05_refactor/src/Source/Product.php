<?php
    /**
     * Created by Jocimar.
     * User: jocimar
     * Date: 09/02/18
     * Time: 15:04
     * SON:- PHP - Avancando com OO - code_05_refactor (Refatorando a aplicacao)
     */

    class Product
    {
        private $db;

        // Construtor recebe a conexao por parametro do tipo IConn
        public function __construct (IConn $db)
        {
            $this->db = $db->connect(); // devolve uma conexao para o atributo
        }

        public function list()
        {
            // Criacao de uma consulta ao db que trara todos os produtos
            $query = "Select * from products";

            // Preparacao da conexao
            $stmt = $this->db->prepare ($query);

            // Execucao da conexao
            $stmt->execute();

            // Retorna os produtos da tabela atraves de um Array Associativo
            return $stmt->fetchAll (\PDO::FETCH_ASSOC);
        }
    }