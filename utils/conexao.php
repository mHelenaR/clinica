<?php
class Conexao{
    public static function ConexaoBanco()
    {
        $nomeBanco = "clinica";
        $senha = "123456";
        $usuario = "root";
        $hostName = "localhost:3306";
        $dataSource = "mysql:host=$hostName;dbname=$nomeBanco";

        return new PDO($dataSource,$usuario,$senha);
    }
}
?>