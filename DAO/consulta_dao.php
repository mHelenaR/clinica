<?php

include "utils/conexao.php";
class ConsultaDAO
{
    /*cons_data date,
    cons_descricao varchar(50),
    cons_id_paciente int,
    cons_id_medico int, */

    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::ConexaoBanco();
    }

    public function insert(ConsultaModel $model)
    {
        $sql = "INSERT INTO consulta (cons_data,cons_descricao,cons_id_paciente,cons_id_medico) VALUES (?,?,?,?)";
        $stmt = $this->conexao->prepare($sql); 
        $stmt->bindValue(1,$model->cons_data);
        $stmt->bindValue(2,$model->cons_descricao);
        $stmt->bindValue(3,$model->cons_id_paciente);
        $stmt->bindValue(4,$model->cons_id_medico);
        $stmt->execute(); 

    }

    public function update(ConsultaModel $model)
    {
        
    }

    public function select()
    {
        $sql = "SELECT * FROM consulta ORDER BY cons_id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
    }
}
?>