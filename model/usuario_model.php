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
    public $usua_nome, $usua_email, $usua_senha, $usua_tipo;

    public function cadastrar()
    {
        include 'DAO/usuario_dao.php';
        $dao = new UsuarioDAO(); 
        $dao->insert($this);
    }

}
