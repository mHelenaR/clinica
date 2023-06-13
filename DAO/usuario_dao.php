<?php
session_start();

include "utils/conexao.php";
include 'controller/paciente_controller.php';
class UsuarioDAO
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::ConexaoBanco();
    }

    public function insert(UsuarioModel $model)
    {
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
        }
    }

    public function update(UsuarioModel $model)
    {
    }

    public function select()
    {
        $sql = "SELECT * FROM usuario ORDER BY usua_id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
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
