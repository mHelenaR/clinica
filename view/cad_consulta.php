<?php
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../view/css/botao.css">
    <link rel="stylesheet" type="text/css" href="../view/css/label.css">
    <link rel="stylesheet" type="text/css" href="../view/css/input.css">
    <link rel="stylesheet" type="text/css" href="../view/css/lista_container.css">

    <title>Médicos</title>

    <style>
        .container-lista {
            height: 80vh;
            background-color: #fff;
            border-radius: 10px;
            margin-left: 40px;
            margin-right: 40px;
            margin-top: 20px;
            margin-bottom: 50px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            align-items: center;
            padding-left: 10px;
            padding-right: 10px;
        }


        .container-form {
            height: 45vh;
            background-color: #fff;
            border-radius: 10px;
            margin-left: 50px;
            margin-right: 50px;
            margin-top: 20px;
            margin-bottom: 50px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: start;
        }

        .container-form.caminho {
            height: 50px;
            background-color: #fff;
            border-radius: 10px;
            margin-left: 50px;
            margin-right: 50px;
            margin-top: 20px;
            margin-bottom: 0px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            display: flex;
            padding-left: 15px;
            padding-top: 10px;
            align-items: center;
            font-weight: bold;
        }

        .agrupa.lista {
            width: 100%;
            height: auto;
        }

        .agrupa.form {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <main>
        <?php
        include 'components/menu_bar.php';
        ?>
        <div class="container-fluid">
            <div class="col-sm-12 col-md-12 d-flex">
                <div class="agrupa form">
                    <div class="container-form caminho">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="/" style="color:#929292;">Home</a></li>
                            <li class="breadcrumb-item active" style="color:#000000;">Médicos</li>
                        </ol>
                    </div>
                    <div class="container-form">
                        <form method="post" action="/cadastrar-consulta">
                            <input id="cons_id" name="cons_id" type="hidden" value="" />
                            <div class="row" style="margin: 10px;">
                                <label class="paciente title">Cadastro de Consultas</label>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="input-pacientes">Data Consulta</label>
                                        <input class="input-arredondado2" id="cons_data" name="cons_data" type="date" />
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="input-pacientes">Descrição</label>
                                        <input class="input-arredondado2" id="cons_descricao" name="cons_descricao" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="input-pacientes">Cod Paciente</label>
                                        <input class="input-arredondado2" id="cons_id_paciente" name="cons_id_paciente" type="text"  />
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="input-pacientes">Nome Paciente</label>
                                        <input class="input-arredondado2" id="nome_paciente" name="nome_paciente" type="text" disabled />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="input-pacientes">Cod Médico</label>
                                        <input class="input-arredondado2" id="cons_id_medico" name="cons_id_medico" type="text"  />
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="input-pacientes">Nome Médico</label>
                                        <input class="input-arredondado2" id="nome_medico" name="nome_medico" type="text" disabled />
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group ">
                                        <button type="submit" name="btn_cadastrarCons" id="btn_cadastrarCons" class="botao-form">Cadastrar</button>
                                        <button type="submit" name="btn_alterarCons" id="btn_alterarCons" class="botao-form">Alterar</button>
                                        <button type="submit" name="btn_excluirCons" id="btn_excluirCons" class="botao-form">Excluir</button>
                                        <button type="button" name="btn_limparCons" id="btn_limparCons" class="botao-form">Restaurar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="container-form">
                        <div class="container-fluid">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Data</th>
                                        <th>Descrição</th>
                                        <th>Paciente</th>
                                        <th>Opção</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($_SESSION["consultas"] as $consulta) {
                                        $id = $consulta->cons_id;
                                        $data = $consulta->cons_data;
                                        $descricao = $consulta->cons_descricao;
                                        $paciente = $consulta->usua_nome;
                                    ?>
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $data; ?></td>
                                            <td><?php echo $descricao; ?></td>
                                            <td><?php echo $paciente; ?></td>
                                            <td>
                                                <input type="hidden" name="consulta_id" value="<?php echo $id; ?>">
                                                <button type="button" class="btn_editar"  data-id="<?php echo $id; ?>">Editar</button>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const btnCadastrar = document.getElementById("btn_limparCons");
        const formConsulta = document.querySelector("form");

        // Limpar e liberar os campos de input
        function limparCampos() {
            formConsulta.reset();
            document.getElementById("cons_id_paciente").removeAttribute("disabled");
            document.getElementById("nome_paciente").removeAttribute("disabled");
            document.getElementById("cons_id_medico").removeAttribute("disabled");
            document.getElementById("nome_medico").removeAttribute("disabled");
        }

        btnCadastrar.addEventListener("click", function() {
            limparCampos();
        });

        const btnsEditar = document.querySelectorAll(".btn_editar");
        btnsEditar.forEach((btn) => {
            btn.addEventListener("click", function() {
                const consultaId = this.getAttribute("data-id");
                const consulta = findConsultaById(consultaId);
                if (consulta) {
                    document.getElementById("cons_id").value = consulta.cons_id;
                    document.getElementById("cons_data").value = consulta.cons_data;
                    document.getElementById("cons_descricao").value = consulta.cons_descricao;
                    document.getElementById("cons_id_paciente").value = consulta.cons_id_paciente;
                    document.getElementById("nome_paciente").value = consulta.usua_nome;
                    document.getElementById("cons_id_medico").value = consulta.cons_id_medico;
                    document.getElementById("nome_medico").value = consulta.usua_nome;
                }
            });
        });

        // Função para procurar a consulta pelo ID na lista de consultas em $_SESSION["consultas"]
        function findConsultaById(id) {
            // Esta é uma simulação do formato da sua lista de consultas em $_SESSION["consultas"]
            // Substitua esta lista pelo seu array real.
            const consultas = <?php echo json_encode($_SESSION["consultas"]); ?>;
            return consultas.find((consulta) => consulta.cons_id == id);
        }
    });
</script>


</body>

</html>