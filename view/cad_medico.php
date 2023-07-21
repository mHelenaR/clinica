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
            <div class="row">
                <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                    <div class="agrupa lista ">
                        <div class="container-lista d-flex flex-column">
                            <label class="paciente title pesquisa">Médicos Cadastrados</label>
                            <input class="input-arredondado3" id="pesquisa" name="pesquisa" type="text" placeholder="Pesquisar" /><br>
                            <hr style="border: 1px solid #BFBFBF; width: 100%; margin-top: 10px; margin-bottom: 10px;">
                            <div class="container3">
                                <?php foreach ($_SESSION['medicos'] as $item) : ?>
                                    <div class="colored-container2">
                                        <label class="label-perfil"><?php echo $item->usua_nome ?></label>
                                        <button class="botao-perfil" name="mediPerfil" type="button" data-crm="<?php echo $item->medi_crm ?>" data-especialidade="<?php echo $item->medi_especialidade ?>" data-email="<?php echo $item->usua_email ?>" data-senha="<?php echo $item->usua_senha ?>" data-id_medi="<?php echo $item->usua_id ?>" data-nomeMedi="<?php echo $item->usua_nome ?>">Perfil</button>
                                    </div>
                                <?php endforeach ?>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 d-flex">
                    <div class="agrupa form">
                        <div class="container-form caminho">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item "><a href="/" style="color:#929292;">Home</a></li>
                                <li class="breadcrumb-item active" style="color:#000000;">Médicos</li>
                            </ol>
                        </div>
                        <div class="container-form">
                            <form method="post" action="/cadastrar-medico">
                                <input id="tipo" name="tipo" type="hidden" value="medico" />
                                <input id="id_medi" name="id_medi" type="hidden" value="" />

                                <div class="row" style="margin: 10px;">
                                    <label class="paciente title">Cadastro de Médicos</label>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="input-pacientes">Nome Completo</label>
                                            <input class="input-arredondado2" id="nomeMedi" name="nomeMedi" type="text" placeholder="Insira o nome completo do médico" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="input-pacientes">CRM</label>
                                            <input class="input-arredondado2" id="crmMedi" name="crmMedi" type="text" placeholder="Insira o CRM" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="input-pacientes">Especialidade</label>
                                            <input class="input-arredondado2" id="especialidadeMedi" name="especialidadeMedi" type="text" placeholder="Ex.: cardiologista" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label class="input-pacientes">E-mail</label>
                                            <input class="input-arredondado2" id="emailMedi" name="emailMedi" type="email" placeholder="Insira o email do médico" />
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="input-pacientes">Senha</label>
                                            <input class="input-arredondado2" id="senhaMedi" name="senhaMedi" type="text" placeholder="Insira uma senha para o médico" />
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group ">
                                            <button type="submit" name="btn_cadastrarMedi" id="btn_cadastrarMedi" class="botao-form">Cadastrar</button>
                                            <button type="submit" name="btn_alterarMedi" id="btn_alterarMedi" class="botao-form">Alterar</button>
                                            <button type="submit" name="btn_excluirMedi" id="btn_excluirMedi" class="botao-form">Excluir</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Função para filtrar os resultados com base no valor inserido no campo de pesquisa
        function filtrarMedicos() {
            var input, filter, container, medicos, medico, nome;
            input = document.getElementById('pesquisa');
            filter = input.value.toUpperCase();
            container = document.querySelector('.container3');
            medicos = container.getElementsByClassName('colored-container2');

            for (var i = 0; i < medicos.length; i++) {
                medico = medicos[i];
                nome = medico.querySelector('.label-perfil').innerText;

                if (nome.toUpperCase().indexOf(filter) > -1) {
                    medico.style.display = '';
                } else {
                    medico.style.display = 'none';
                }
            }
        }
        document.getElementById('pesquisa').addEventListener('input', filtrarMedicos);

        // Função para preencher o nome no input com id "nome" e guardar o ID no input escondido
        function preencherNomeEID(nomeMedico, idMedico, especiaMedico, crmMedico, emailMedico, senhaMedico) {
            document.getElementById("nomeMedi").value = nomeMedico;
            document.getElementById("id_medi").value = idMedico;
            document.getElementById("crmMedi").value = crmMedico;
            document.getElementById("especialidadeMedi").value = especiaMedico;
            document.getElementById("emailMedi").value = emailMedico;
            document.getElementById("senhaMedi").value = senhaMedico;
        }

        // Event listener for the "Perfil" buttons
        var botoesPerfil = document.getElementsByClassName("botao-perfil");
        for (var i = 0; i < botoesPerfil.length; i++) {
            botoesPerfil[i].addEventListener("click", function() {
                var nomeMedico = this.getAttribute("data-nomeMedi");
                var idMedico = this.getAttribute("data-crm");
                var crmMedico = this.getAttribute("data-especialidade");
                var especiaMedico = this.getAttribute("data-email");
                var emailMedico = this.getAttribute("data-senha");
                var senhaMedico = this.getAttribute("data-id_paci");
                preencherNomeEID(nomeMedico, idMedico, especiaMedico, crmMedico, emailMedico, senhaMedico);
            });
        }
    </script>
</body>

</html>