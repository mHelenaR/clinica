<?php

class PacienteController
{

    public static function cadastrarPaciente(String $id, PDO $conexao)
    {
        include 'model/paciente_model.php';
        $paciente = new PacienteModel();
        $paciente->paci_cpf = $_POST['cpf'];
        $paciente->paci_telefone = $_POST['telefone'];
        $paciente->paci_id_usuario = $id;
        $paciente->cadastrar($conexao);
    }
}
