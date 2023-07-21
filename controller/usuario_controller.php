<?php
class UsuariosController
{

    public static function cadastrarUsuario()
    {
        include 'model/usuario_model.php';
        $cadUsu = new UsuarioModel();
        $cadUsu->usua_nome = $_POST['nome'];
        $cadUsu->usua_email = $_POST['email'];
        $cadUsu->usua_senha = $_POST['senha'];
        $cadUsu->usua_tipo = $_POST['tipo'];
        $cadUsu->cadastrar();
        echo "<script language='javascript' type='text/javascript'>
                    alert('Paciente cadastrado com sucesso!!!');
                    window.location.href = '/paciente';
                    </script>";
        exit();
    }

    public static function carregaLista()
    {
        include 'model/usuario_model.php';
        $listaUsu  = new UsuarioModel();
        $listaPacientes = $listaUsu->getAllRows();
        $_SESSION["pacientes"] = $listaPacientes;
    }

    public static function carregaListaMedico()
    {
        include 'model/usuario_model.php';
        $listaUsu  = new UsuarioModel();
        $listaMedicos = $listaUsu->getAllRowsMedico();
        $_SESSION["medicos"] = $listaMedicos;
    }

    public static function alterarUsuario()
    {
        include 'model/usuario_model.php';
        $cadUsu = new UsuarioModel();
        $cadUsu->usua_nome = $_POST['nome'];
        $cadUsu->usua_id = $_POST['id_paci'];
        $cadUsu->usua_email = $_POST['email'];
        $cadUsu->usua_senha = $_POST['senha'];
        $cadUsu->usua_tipo = $_POST['tipo'];
        $cadUsu->alterar();
        echo "<script language='javascript' type='text/javascript'>
                    alert('Registro alterado com sucesso!!!');
                    window.location.href = '/paciente';
                    </script>";
        exit();
    }

    public static function alteraMedico()
    {
        include 'model/usuario_model.php';
        $cadUsu = new UsuarioModel();
        $cadUsu->usua_nome = $_POST['nomeMedi'];
        $cadUsu->usua_id = $_POST['id_medi'];
        $cadUsu->usua_email = $_POST['emailMedi'];
        $cadUsu->usua_senha = $_POST['senhaMedi'];
        $cadUsu->usua_tipo = $_POST['tipo'];
        $cadUsu->alterar();
        echo "<script language='javascript' type='text/javascript'>
                    alert('Registro alterado com sucesso!!!');
                    window.location.href = '/medico';
                    </script>";
        exit();
    }
    public static function excluirUsuario()
    {
        include 'model/usuario_model.php';
        $cadUsu = new UsuarioModel();
        $cadUsu->usua_id = $_POST['id_paci'];
        $cadUsu->usua_tipo = $_POST['tipo'];
        $cadUsu->excluir();
        echo "<script language='javascript' type='text/javascript'>
                alert('Registro excluido com sucesso!!!');
                window.location.href = '/paciente';
                </script>";
        exit();
    }
}
