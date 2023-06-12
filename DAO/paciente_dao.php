<?php

class PacienteDAO
{
    private $conexao;

    public function __construct(PDO $con)
    {
        $this->conexao = $con;
    }

    public function insert(PacienteModel $model)
    {
        $sql = "INSERT INTO paciente (paci_cpf,paci_telefone,paci_id_usuario) VALUES (?,?,?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->paci_cpf);
        $stmt->bindValue(2, $model->paci_telefone);
        $stmt->bindValue(3, $model->paci_id_usuario);
        $stmt->execute();
    }

    public function update(PacienteModel $model)
    {
    }

    public function select()
    {
        // $sql = "SELECT * FROM paciente ORDER BY paci_id";
        // $stmt = $this->conexao->prepare($sql);
        // $stmt->execute();
    }
}
