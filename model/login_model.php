<?php

class LoginModel{
    public $usua_email, $usua_senha;

    public function loginUsuario()
    {
        include 'DAO/usuario_dao.php';
        $dao = new UsuarioDao(); 
        $result = $dao->login($this);

        return $result;
    }
}

?>