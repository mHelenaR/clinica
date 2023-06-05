<?php

include "utils/conexao.php";
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
}
