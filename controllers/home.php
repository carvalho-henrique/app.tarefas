<?php

require_once "models/Tarefa.php";

$tarefa = new Tarefa;
$tarefas = $tarefa->index();

require_once "views/app/home.php";