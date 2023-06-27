<?php
require_once "models/Conn.php";

if(!$_REQUEST['item']){
    require_once "views/app/tarefa.php";
} else {
    if($_REQUEST['item'] == "create"){
        $id = $_REQUEST['id'];
        $tarefa = $_REQUEST['tarefa'];
        $descricao = $_REQUEST['descricao'];
        $data_tarefa = $_REQUEST['data_tarefa'];

        if(empty($id)){
            $sql = "insert into tarefas (tarefa, descricao, data_tarefa) values ('$tarefa', '$descricao', '$data_tarefa')";
        } else {
            $sql = "update tarefas set tarefa = '$tarefa', descricao = '$descricao', data_tarefa = '$data_tarefa' where id = $id";
        }

        $conn = new Conn;
        $conn->execute($sql);
    }

    if($_REQUEST['item'] == "delete"){
        $id = $_REQUEST['id'];

        if(!empty($id)){
            $sql = "delete from tarefas where id = $id";
    
            $conn = new Conn;
            $conn->execute($sql);
        }

    }
}