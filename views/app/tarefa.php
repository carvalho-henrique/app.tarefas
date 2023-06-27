<?php
    $id = $_REQUEST['id'];

    if(!empty($id)){
        require_once "models/Tarefa.php";

        $tarefa = new Tarefa;
        $tarefa = $tarefa->select($id);

        $tarefa = $tarefa[0];
    }
?>
<div class="container">
    <div class="flex">
        <h1>Criar Tarefa</h1>
        <button class="button btn-tarefas">Tarefas</button>
    </div>
    <form class="form" id="form-cadastro">
        <input type="hidden" name="id" value="<?php echo $tarefa["id"]?>"/>
        Nome da Tarefa:
        <input type="text" name="tarefa" id="tarefa" placeholder="Digite o nome da Tarefa" value="<?php echo $tarefa["tarefa"]?>"/>
        Descrição:
        <textarea rows="10" name="descricao" ><?php echo $tarefa["descricao"]?></textarea>
        Data da Tarefa:
        <input type="date" name="data_tarefa" id="data_tarefa" value="<?php echo $tarefa["data_tarefa"]?>"/>
        <button type="submit" class="btn-default btn-salvar">Salvar</button>
    </form>
</div>