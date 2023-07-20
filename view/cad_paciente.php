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

    <title>Pacientes</title>

    <style>
        .container-lista {
            height: 75vh;
            background-color: #fff;
            border-radius: 10px;
            margin-left: 50px;
            margin-right: 50px;
            margin-top: 20px;
            margin-bottom: 50px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: start;
        }

        .container-form {
            height: 75vh;
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
            justify-content: left;
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
                <div class="col-sm-3 col-md-3 d-flex justify-content-center">
                    <div class="agrupa lista ">
                        <div class="d-flex justify-content-center">
                            <button class="botao-paciente " type="submit" name="btn_Entrar">Cadastrar Paciente</button>
                        </div>
                        <div class="container-lista">
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-md-9 d-flex  justify-content-center">
                    <div class="agrupa form">
                        <div class="container-form caminho">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item "><a href="/" style="color:#929292;">Home</a></li>
                                <li class="breadcrumb-item active" style="color:#000000;">Pacientes</li>
                            </ol>
                        </div>
                        <div class="container-form">
                            <label class="paciente title">Cadastro de Pacientes</label><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!---<form method="post" action="/cadastrar">
        <input id="tipo" name="tipo" type="hidden" value="paciente" />

        <label for="nome">Nome Completo: </label>
        <input id="nome" name="nome" type="text" />

        <label for="email">E-mail: </label>
        <input id="email" name="email" type="" />

        <label for="cpf">CPF: </label>
        <input id="cpf" name="cpf" type="text" />
        <label for="telefone">Telefone: </label>
        <input id="telefone" name="telefone" type="tel" />



        <label for="senha">Senha: </label>
        <input id="senha" name="senha" type="text" />

        <button type="submit">Cadastrar</button>
    </form>
---->

</body>

</html>