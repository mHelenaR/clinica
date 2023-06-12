<?php
/*
  create table medico(
	medi_id int auto_increment primary key,
    medi_crm int,
    medi_especialidade varchar(20),
    medi_id_usuario int,
    FOREIGN KEY (medi_id_usuario) REFERENCES usuario(usua_id)
);
 
 */

 class MedicoModel{
    public $medi_crm, $medi_especialidade, $medi_id_usuario;

    public function cadastrar()
    {
        include 'DAO/medico_dao.php';
        $dao = new MedicoDAO(); 
        $dao->insert($this);
    }
 }

?>