<?php
/*
    create table usuario(
	usua_id int auto_increment primary key,
    usua_nome varchar(50),
    usua_email varchar(50),
    usua_senha varchar(50),
    usua_tipo varchar(10)
    ); */
class UsuarioModel
{
    public $usua_id, $usua_nome, $usua_email, $usua_senha, $usua_tipo;

    public $rows;

    public function cadastrar()
    {
        include 'DAO/usuario_dao.php';
        $dao = new UsuarioDAO();
        $dao->insert($this);
    }

    public function getAllRows()
    {
        include 'DAO/usuario_dao.php';
        $dao = new UsuarioDAO();
        $result = $dao->selectPaciente();

        return $result;
    }

    public function getAllRowsMedico()
    {
        include 'DAO/usuario_dao.php';
        $dao = new UsuarioDAO();
        $result = $dao->selectMedico();

        return $result;
    }
    
    public function alterar()
    {
        include 'DAO/usuario_dao.php';
        $dao = new UsuarioDAO();
        $dao->alterar($this);
    }

    public function excluir()
    {
        include 'DAO/usuario_dao.php';
        $dao = new UsuarioDAO();
        $dao->excluir($this);
    }
}
