<?php
class RotasController
{
    public static function paginaInicial()
    {
        include 'view/pagina_inicial.php';
    }
    public static function cadastrarPaciente()
    {
        if (isset($_POST['btn_alterarPaci'])) {
            UsuariosController::alterarUsuario();
        } else if (isset($_POST['btn_excluirPaci'])) {
            UsuariosController::excluirUsuario();
        } else if (isset($_POST['btn_cadastrarPaci'])) {
            UsuariosController::cadastrarUsuario();
        }
        header('location: /paciente');
        exit;
    }

    public static function cadastrarMedico()
    {
        if (isset($_POST['btn_alterarMedi'])) {
            UsuariosController::alteraMedico();
        } else if (isset($_POST['btn_excluirMedi'])) {
            UsuariosController::excluirUsuario();
        } else if (isset($_POST['btn_cadastrarMedi'])) {
            UsuariosController::cadastrarMedico();
        }
        header('location: /medico');
        exit;
    }

    public static function cadastrarConsulta()
    {
        ConsultaController::cadastrarConsulta();
        header('location: /consulta');
        exit;
    }

    public static function paciente()
    {
        UsuariosController::carregaLista();
        include 'view/cad_paciente.php';
    }

    public static function medico()
    {
        UsuariosController::carregaListaMedico();
        include 'view/cad_medico.php';
    }

    public static function entrar()
    {
        include 'view/login.php';
    }

    public static function login()
    {
        LoginController::VerificaUsuario();
    }

    public static function consulta()
    {
        ConsultaController::carregaListaConsulta();
        include 'view/cad_consulta.php';
    }
}
