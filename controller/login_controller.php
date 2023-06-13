<?php
class LoginController
{
    public static function VerificaUsuario()
    {
        include 'model/login_model.php';
        $model = new LoginModel();
        $model->usua_email = $_POST['email'];
        $model->usua_senha = $_POST['senha'];
        $model->loginUsuario();
    }
}
