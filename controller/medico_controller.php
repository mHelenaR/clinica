<?php

class MedicoController{

    public static function cadastrarMedico(String $id, PDO $conexao)
    {
        include 'model/medico_model.php';
        $paciente = new MedicoModel();
        $paciente->medi_crm = $_POST['CRM'];
        $paciente->medi_especialidade = $_POST['especialidade'];
        $paciente->medi_id_usuario = $id;
        $paciente->cadastrar($conexao);
    }
}


?>