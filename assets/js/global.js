$(document).ready(function () {
    $(".btn-nova-tarefa").click(function () {
        window.location.href = "/tarefa";
    })

    $(".btn-tarefas").click(function () {
        window.location.href = "/";
    })

    $(".btn-salvar").click(function (e) {
        e.preventDefault()
        if ($("#tarefa").val() != "" && $("#data_tarefa").val() != ""){
            $.post("/tarefa", $("#form-cadastro").serialize() + "&item=create")
                .then(response => {
                    window.location.href = "/";
                })
                .catch(error => console.log(error))  
        }
    })

    $(".remove").click(function () {
        const id = $(this).val()
        $.post("/tarefa", {item: "delete", id: id})
            .then(response => {
                location.reload()
            })
            .catch(error => console.log(error))
    })

    $(".edit").click(function () {
        const id = $(this).val()
        if(id){
            window.location = "/tarefa?id=" + id;
        }
    })
});