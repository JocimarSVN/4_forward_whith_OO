<?php
    /**
     * Created by Jocimar.
     * User: jocimar
     * Date: 09/02/18
     * Time: 14:34
     * SON:- PHP - Avancando com OO - Class Product
     */

    class Product
    {
        private $db;

        // Construtor recebe a conexao por parametro
        public function __construct ($db)
        {
            $this->db = $db;  //  Atribui para a a variavel db
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