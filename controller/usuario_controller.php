<?php

    class UsuariosController{

        public static function cadastrarUsuario(){
            include 'model/usuario_model.php';

            $model = new UsuarioModel();
            $model->usua_nome = $_POST['nome'];
            $model->usua_email = $_POST['email'];
            $model->usua_senha = $_POST['senha'];
            $model->usua_tipo = $_POST['tipo'];
            $model->cadastrar();
            echo "<script>alert('Olá, mundo!');</script>";
           
        }

        public static function cadastrar(){
            include 'model/usuario_model.php';
            
            $model = new UsuarioModel(); 
            $model->usua_nome = $_POST['nome'];
            $model->usua_email = $_POST['email'];
            $model->usua_senha = $_POST['senha'];
            $model->usua_tipo = $_POST['tipo'];
            $model->cadastrar();

        }
    }


?>