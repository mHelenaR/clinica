<?php

class MedicoController{

    public static function cadastrarMedico(String $id, PDO $conexao)
    {
        include 'model/medico_model.php';
        $paciente = new MedicoModel();
        $paciente->medi_crm = $_POST['crmMedi'];
        $paciente->medi_especialidade = $_POST['especialidadeMedi'];
        $paciente->medi_id_usuario = $id;
        $paciente->cadastrar($conexao);
    }

    public static function alterarMedico(String $id, PDO $conexao)
    {
        include 'model/medico_model.php';
        $paciente = new MedicoModel();
        $paciente->medi_crm = $_POST['crmMedi'];
        $paciente->medi_especialidade = $_POST['especialidadeMedi'];
        $paciente->medi_id_usuario = $id;
        $paciente->alterar($conexao);
    }
    public static function excluirMedico(String $id, PDO $conexao)
    {
        include 'model/medico_model.php';
        $paciente = new MedicoModel();
        $paciente->medi_id_usuario = $id;
        $paciente->excluir($conexao);
    }
}
