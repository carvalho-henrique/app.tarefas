<div class="container">
    <div class="flex">
        <h1>Tarefas</h1>
        <button class="button btn-nova-tarefa">Nova Tarefa</button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tarefa</th>
                <th>Descrição</th>
                <th>Data</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($tarefas["msg"]){
                    echo 
                    "<tr><td colspan='5'>".$tarefas["msg"]."</td></tr>";
                } else {
                    foreach ($tarefas as $tarefa) {
                        echo 
                        "<tr>
                            <td>".$tarefa["id"]."</td>
                            <td>".$tarefa["tarefa"]."</td>
                            <td>".$tarefa["descricao"]."</td>
                            <td>".$tarefa["data_tarefa"]."</td>
                            <td>
                                <button class='btn-default edit' value='".$tarefa["id"]."'>Editar</button>
                                <button class='btn-default remove' value='".$tarefa["id"]."'>Remover</button>
                            </td>
                        </tr>";
                    }
                }
            ?>
        </tbody>
    </table>
    
</div>