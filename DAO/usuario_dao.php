<?php
session_start();

include "utils/conexao.php";
include 'controller/paciente_controller.php';
include 'controller/medico_controller.php';
class UsuarioDAO
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::ConexaoBanco();
    }

    public function insert(UsuarioModel $model)
    {
        if (isset($_POST['btn_cadastrarPaci'])or isset($_POST['btn_cadastrarMedi'])) {
            $sql = "INSERT INTO usuario (usua_nome,usua_email,usua_senha,usua_tipo) VALUES (?,?,?,?)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->usua_nome);
            $stmt->bindValue(2, $model->usua_email);
            $stmt->bindValue(3, $model->usua_senha);
            $stmt->bindValue(4, $model->usua_tipo);
            $stmt->execute();

            if ($model->usua_tipo == 'paciente') {
                $paciente = new PacienteController;
                $paciente->cadastrarPaciente($this->conexao->lastInsertId(), $this->conexao);
            } else if ($model->usua_tipo == 'medico') {
                $medico = new MedicoController;
                $medico->cadastrarMedico($this->conexao->lastInsertId(), $this->conexao);
            }
        }
    }

    public function alterar(UsuarioModel $model)
    {

        if (isset($_POST['btn_alterarPaci']) or isset($_POST['btn_alterarMedi'])) {
            $sql = "UPDATE usuario SET usua_nome = ?, usua_email = ?, usua_senha = ? WHERE usua_id = ?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->usua_nome);
            $stmt->bindValue(2, $model->usua_email);
            $stmt->bindValue(3, $model->usua_senha);
            $stmt->bindValue(4, $model->usua_id);
            $stmt->execute();

            if ($model->usua_tipo == 'paciente') {
                $paciente = new PacienteController;
                $paciente->alterarPaciente($model->usua_id, $this->conexao);
            } else if ($model->usua_tipo == 'medico') {

                $medico = new MedicoController;
                $medico->alterarMedico($model->usua_id, $this->conexao);
            }
        }
    }

    public function excluir(UsuarioModel $model)
    {
        if (isset($_POST['btn_excluirPaci']) or isset($_POST['btn_excluirMedi'])) {
            if ($model->usua_tipo == 'paciente') {
                $paciente = new PacienteController;
                $paciente->excluirPaciente($model->usua_id, $this->conexao);
            } else if ($model->usua_tipo == 'medico') {
                $medico = new MedicoController;
                $medico->excluirMedico($model->usua_id, $this->conexao);
            }

            $sql = "DELETE FROM usuario  WHERE usua_id = ?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->usua_id);
            $stmt->execute();
        }
    }
    public function selectPaciente()
    {
        $sql = "SELECT * FROM usuario
                INNER JOIN paciente ON usuario.usua_id = paciente.paci_id_usuario 
                ORDER BY usua_id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS); //organiza na forma de um array de objetos
        return $result;
    }

    public function selectMedico()
    {
        $sql = "SELECT * FROM usuario
                INNER JOIN medico ON usuario.usua_id = medico.medi_id_usuario 
                ORDER BY usua_id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS); //organiza na forma de um array de objetos
        return $result;
    }

    public function login(LoginModel $model)
    {
        if (isset($_POST['btn_Entrar'])) {
            $email = $model->usua_email;
            $senha = $model->usua_senha;

            $sql = "SELECT * FROM usuario WHERE usua_email = ? AND usua_senha = ?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        } else {
            echo 'ta caindo no if, botao errado';
        }
    }
}
