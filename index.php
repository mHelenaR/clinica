<?php

include 'controller/rotas_controller.php';
include 'controller/login_controller.php';
include 'controller/usuario_controller.php';
include 'controller/consulta_controller.php';


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

# Navegação por Rotas
switch ($url) {
    case '/':
        RotasController::paginaInicial();
        break;
    case '/cadastrar':
        RotasController::cadastrarPaciente();
        break;
    case '/cadastrar-medico':
        RotasController::cadastrarMedico();
        break;
    case '/cadastrar-consulta':
        RotasController::cadastrarConsulta();
        break;
    case '/paciente':
        RotasController::paciente();
        break;
    case '/medico':
        RotasController::medico();
        break;
    case '/login':
        RotasController::login();
        break;
    case '/entrar':
        RotasController::entrar();
        break;
    case '/consulta':
        RotasController::consulta();
        break;
    default:
        echo 'Erro';
        break;
}
