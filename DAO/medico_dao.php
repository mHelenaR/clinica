<?php

include "utils/conexao.php";
class MedicoDAO
{
    /*    
    medi_crm int,
    medi_especialidade varchar(20),
    medi_id_usuario int, */

    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::ConexaoBanco();
    }

    public function insert(MedicoModel $model)
    {
        $sql = "INSERT INTO medico (medi_crm,medi_especialidade,medi_id_usuario) VALUES (?,?,?)";
        $stmt = $this->conexao->prepare($sql); 
        $stmt->bindValue(1,$model->medi_crm);
        $stmt->bindValue(2,$model->medi_especialidade);
        $stmt->bindValue(3,$model->medi_id_usuario);
        $stmt->execute(); 

    }

    public function update(MedicoModel $model)
    {
        
    }

    public function select()
    {
        $sql = "SELECT * FROM medico ORDER BY medi_id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
    }
}
?>