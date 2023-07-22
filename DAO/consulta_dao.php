<?php
session_start();

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
        $stmt->bindValue(1,date($model->cons_data));
        $stmt->bindValue(2,$model->cons_descricao);
        $stmt->bindValue(3,(int)$model->cons_id_paciente);
        $stmt->bindValue(4,(int)$model->cons_id_medico);
        $stmt->execute(); 

    }

    public function selectConsulta()
    {  
        $sql = "SELECT * FROM consulta
        INNER JOIN medico ON consulta.cons_id_medico = medico.medi_id
        INNER JOIN paciente ON consulta.cons_id_paciente = paciente.paci_id
        INNER JOIN usuario ON usuario.usua_id = paciente.paci_id
        ORDER BY cons_id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS); //organiza na forma de um array de objetos
        return $result;
    }

    
}
