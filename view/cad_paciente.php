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

    <title>Pacientes</title>

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

    <script>

    </script>
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
                            <label class="paciente title pesquisa">Pacientes Cadastrados</label>
                            <input class="input-arredondado3" id="pesquisa" name="pesquisa" type="text" placeholder="Pesquisar" /><br>
                            <hr style="border: 1px solid #BFBFBF; width: 100%; margin-top: 10px; margin-bottom: 10px;">
                            <div class="container3">
                                <?php foreach ($_SESSION['pacientes'] as $item) : ?>
                                    <div class="colored-container2">
                                        <label class="label-perfil"><?php echo $item->usua_nome ?></label>
                                        <button class="botao-perfil" type="button" data-cpf="<?php echo $item->paci_cpf ?>" data-telefone="<?php echo $item->paci_telefone ?>" data-email="<?php echo $item->usua_email ?>" data-senha="<?php echo $item->usua_senha ?>" data-id_paci="<?php echo $item->usua_id ?>" data-nome="<?php echo $item->usua_nome ?>">Perfil</button>
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
                                <li class="breadcrumb-item active" style="color:#000000;">Pacientes</li>
                            </ol>
                        </div>
                        <div class="container-form">
                            <form method="post" action="/cadastrar">
                                <input id="tipo" name="tipo" type="hidden" value="paciente" />
                                <input id="id_paci" name="id_paci" type="hidden" value="" />

                                <div class="row" style="margin: 10px;">
                                    <label class="paciente title">Cadastro de Pacientes</label>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="input-pacientes">Nome Completo</label>
                                            <input class="input-arredondado2" id="nome" name="nome" type="text" placeholder="Insira o nome completo do paciente" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="input-pacientes">CPF</label>
                                            <input class="input-arredondado2" id="cpf" name="cpf" type="text" placeholder="Ex.:123.456.789-86" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="input-pacientes">Telefone</label>
                                            <input class="input-arredondado2" id="telefone" name="telefone" type="text" placeholder="Ex.: (46)9 9999-9999" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label class="input-pacientes">E-mail</label>
                                            <input class="input-arredondado2" id="email" name="email" type="email" placeholder="Insira o email do paciente" />
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="input-pacientes">Senha</label>
                                            <input class="input-arredondado2" id="senha" name="senha" type="text" placeholder="Insira uma senha para o paciente" />
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group ">
                                            <button type="submit" name="btn_cadastrarPaci" id="btn_cadastrarPaci" class="botao-form">Cadastrar</button>
                                            <button type="submit" name="btn_alterarPaci" id="btn_alterarPaci" class="botao-form">Alterar</button>
                                            <button type="submit" name="btn_excluirPaci" id="btn_excluirPaci" class="botao-form">Excluir</button>
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
        function filtrarPacientes() {
            var input, filter, container, pacientes, paciente, nome;
            input = document.getElementById('pesquisa');
            filter = input.value.toUpperCase();
            container = document.querySelector('.container3');
            pacientes = container.getElementsByClassName('colored-container2');

            for (var i = 0; i < pacientes.length; i++) {
                paciente = pacientes[i];
                nome = paciente.querySelector('.label-perfil').innerText;

                if (nome.toUpperCase().indexOf(filter) > -1) {
                    paciente.style.display = '';
                } else {
                    paciente.style.display = 'none';
                }
            }
        }
        document.getElementById('pesquisa').addEventListener('input', filtrarPacientes);

        // Função para preencher o nome no input com id "nome" e guardar o ID no input escondido
        function preencherNomeEID(nomePaciente, idPaciente,cpfPaciente,telefonePaciente,emailPaciente,senhaPaciente) {
            document.getElementById("nome").value = nomePaciente;
            document.getElementById("id_paci").value = idPaciente;
            document.getElementById("cpf").value = cpfPaciente;
            document.getElementById("telefone").value = telefonePaciente;
            document.getElementById("email").value = emailPaciente;
            document.getElementById("senha").value = senhaPaciente;
        }



        // Evento de escuta para acionar a função de preencher o nome e o ID quando o botão "Perfil" é clicado
        var botoesPerfil = document.getElementsByClassName("botao-perfil");
        for (var i = 0; i < botoesPerfil.length; i++) {
            botoesPerfil[i].addEventListener("click", function() {
                var nomePaciente = this.getAttribute("data-nome");
                var idPaciente = this.getAttribute("data-id_paci");
                var cpfPaciente = this.getAttribute("data-cpf");
                var telefonePaciente = this.getAttribute("data-telefone");
                var emailPaciente = this.getAttribute("data-email");
                var senhaPaciente = this.getAttribute("data-senha");
                preencherNomeEID(nomePaciente, idPaciente,cpfPaciente,telefonePaciente,emailPaciente,senhaPaciente);
            });
        }
    </script>
</body>

</html>