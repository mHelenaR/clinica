<?php
  class ConsultaController{
    public static function carregaListaConsulta()
    {
        include 'model/consulta_model.php';
        $lista  = new ConsultaModel();
        $listaCons = $lista->getAllRows();
        $_SESSION["consultas"] = $listaCons;
    }

    public static function cadastrarConsulta()
    {
        include 'model/consulta_model.php';
        $cadUsu = new ConsultaModel();
        $cadUsu->cons_data = $_POST['cons_data'];
        $cadUsu->cons_descricao = $_POST['cons_descricao'];
        $cadUsu->cons_id_medico = $_POST['cons_id_medico'];
        $cadUsu->cons_id_paciente = $_POST['cons_id_paciente'];
        $cadUsu->cadastrar();
        echo "<script language='javascript' type='text/javascript'>
                    alert('Consulta cadastrada!!!');
                    window.location.href = '/consulta';
                    </script>";
        exit();
    }
  }
