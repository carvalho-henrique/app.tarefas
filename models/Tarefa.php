<?php
require_once "models/Conn.php";

class Tarefa {
    public function index(){
        $conn = new Conn;
        $result = $conn->execute("select * from tarefas");

        if ($result->num_rows > 0) {
            // Exibindo os resultados
            while ($row = $result->fetch_assoc()) {
                $timestamp = strtotime($row["data_tarefa"]); 
                $date = date('d/m/Y', $timestamp);

                $data[] = array(
                    "id" => $row["id"],
                    "tarefa" => $row["tarefa"],
                    "descricao" => $row["descricao"],
                    "data_tarefa" => $date,
                );
            }

            return $data;
        } else {
            return array("msg" => "Nenhum resultado encontrado.");
        }
    }
    
    public function select($id){
        $conn = new Conn;
        $result = $conn->execute("select * from tarefas where id = $id");

        if ($result->num_rows > 0) {
            // Exibindo os resultados
            while ($row = $result->fetch_assoc()) {
                $data[] = array(
                    "id" => $row["id"],
                    "tarefa" => $row["tarefa"],
                    "descricao" => $row["descricao"],
                    "data_tarefa" => $row["data_tarefa"],
                );
            }

            return $data;
        } else {
            return array("msg" => "Nenhum resultado encontrado.");
        }
    }
}
