<?php
class LoginController
{
    public static function VerificaUsuario()
    {
        include 'model/login_model.php';
        $model = new LoginModel();
        $model->usua_email = $_POST['email'];
        $model->usua_senha = $_POST['senha'];
        $loginResult = $model->loginUsuario();

        if ($loginResult != '') {
            $_SESSION['isLogged'] = true;
            $_SESSION["array_usuario"] = $loginResult; 
            echo "<script language='javascript' type='text/javascript'>
                    alert('Login realizado com sucesso!!!');
                    window.location.href = '/';
                    </script>";
            exit();
        } else {
            echo "<script language='javascript' type='text/javascript'>
                    alert('E-Mail ou Senha errados!!!');
                    window.location.href = '/entrar';
                    </script>";
            exit();
        }
        
    }
}
