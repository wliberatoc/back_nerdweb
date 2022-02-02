<?php
require_once __DIR__ . "/Nerdweb/Database.php";
require_once __DIR__ . "/Nerdweb/Controller.php";


$controlador = new \Nerdweb\Controller;

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'add':
            $controlador->exibePaginaAddNoticia();
            break;
        case 'edit':
            $controlador->exibePaginaEditarNoticia();
            break;
        case 'delete':
            $controlador->paginaDeletarNoticia();
            break;
        case 'view':
            $controlador->exibePaginaVisualizarNoticia();
            break;
        default:
            $controlador->exibePaginaNoticia();
            break;
    }
}else{
    header('Location: noticia/');
}

