<?php
session_start();
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
                            <button class="botao-pesquisa" type="submit" name="btn-pesquisa">Pesquisar</button>
                            <hr style="border: 1px solid #BFBFBF; width: 100%; margin-top: 10px; margin-bottom: 10px;">
                            <div class="container3">
                                <?php
                                for ($i = 0; $i < 10; $i++) {
                                    echo '<div class="colored-container2">
                                        <label class="label-perfil">nome</label>
                                        <button class="botao-perfil" type="submit" name="perfil_paciente">Perfil</button>
                                    </div>';
                                }
                                ?>
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
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <button type="submit" name="btn_cadastrar" id="btn_cadastrar" class="botao-form" >Cadastrar</button>
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
</body>

</html>