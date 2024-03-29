<?php
 /*create table paciente(
        paci_id int auto_increment primary key,
        paci_cpf varchar(20),
        paci_telefone varchar(15),
        paci_id_usuario int,
        FOREIGN KEY (paci_id_usuario) REFERENCES usuario(usua_id)
        );*/
class PacienteModel
{
    public $paci_cpf, $paci_telefone, $paci_id_usuario;

    public function cadastrar(PDO $conexao)
    {
        include 'DAO/paciente_dao.php';
        $dao = new PacienteDAO($conexao); 
        $dao->insert($this);
    }
    public function alterar(PDO $conexao)
    {
        include 'DAO/paciente_dao.php';
        $dao = new PacienteDAO($conexao); 
        $dao->alterar($this);
    }

    public function excluir(PDO $conexao)
    {
        include 'DAO/paciente_dao.php';
        $dao = new PacienteDAO($conexao); 
        $dao->excluir($this);
    }
}

?>