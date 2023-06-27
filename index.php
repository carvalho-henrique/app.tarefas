<?php
// Recebe a rota da URL
$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';

// Remove a barra inicial, se existir
$url = ltrim($url, '/');

// Divide a URL em partes
$parts = explode('/', $url);

// Obtém o nome da rota (primeira parte da URL)
$url = isset($parts[0]) ? $parts[0] : '';

$parts = explode('?', $url);
$route = isset($parts[0]) ? $parts[0] : '';


// Define as rotas
$routes = [
    '' => 'home',
    'tarefa' => 'tarefa',
];

if($_REQUEST["item"]){
    require_once 'controllers/' . $routes[$route] . '.php';
} else {
    // Verifica se a rota existe
    if (array_key_exists($route, $routes)) {
        include_once 'views/app.php';
    } else {
        // Rota não encontrada, exibe uma página de erro ou redireciona para uma página padrão
        // ...
    }
}
