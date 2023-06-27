<?php

class Conn {
    public $servername = "localhost";
    public $username = "root";
    public $password = "root";
    public $dbname = "projeto_tarefa";

    public function execute($sql){
        // Criando a conexão
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Verificando a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        $result = $conn->query($sql);

        $conn->close();

        return $result;
    }
}
