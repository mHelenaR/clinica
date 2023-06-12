<?php

include 'controller/rotas_controller.php';
include 'controller/usuario_controller.php';


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

# Navegação por Rotas
switch ($url) {
    case '/':
        RotasController::paginaInicial();
        break;
    case '/cadastrar':
        RotasController::cadastrar();
        break;
    case '/paciente':
        RotasController::paciente();
        break;
    default:
        echo 'Erro';
        break;
}
