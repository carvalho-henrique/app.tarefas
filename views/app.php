<!DOCTYPE html>
<html>
    <head>
        <title>Tarefas</title>
        <link rel="stylesheet" href="styles.css"> <!-- Link para o arquivo CSS externo -->
        <?php
            //inclue arquivos css e js
            require_once 'includes/include_css.php';
            require_once 'includes/include_js.php';
        ?>
    </head>
    <body>
    <?php 
            require_once "views/layout/header.php"; 

            // Inclui o arquivo do controlador correspondente à rota
            require_once 'controllers/' . $routes[$route] . '.php';

            require_once "views/layout/footer.php"; 
        ?>
    </body>
</html>