<?php
class RotasController
{
    public static function paginaInicial()
    {
        include 'view/pagina_inicial.php';
    }
    public static function cadastrar()
    {
        UsuariosController::cadastrarUsuario();
        header('Location: view/cad_paciente.php');
        exit();
    }

    public static function paciente(){
        include 'view/cad_paciente.php';
    }

    public static function medico(){
        include 'view/cad_medico.php';
    }

    public static function entrar(){
        include 'view/login.php';
    }

    public static function login(){
        LoginController::VerificaUsuario();
    }
}
