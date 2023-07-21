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

    public function alterar(PacienteModel $model)
    {
        $sql = "UPDATE paciente  SET paci_cpf = ?, paci_telefone = ?  WHERE paci_id_usuario = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->paci_cpf);
        $stmt->bindValue(2, $model->paci_telefone);
        $stmt->bindValue(3, $model->paci_id_usuario);

        $stmt->execute();
    }
    public function excluir(PacienteModel $model)
    {
        $sql = "DELETE FROM paciente WHERE paci_id_usuario = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->paci_id_usuario);
        $stmt->execute();
    }
}
