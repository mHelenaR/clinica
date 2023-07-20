<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pagina inicial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../view/css/lista_container.css">
    <link rel="stylesheet" type="text/css" href="../view/css/label.css">

    <style>
        .containerForm {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form {
            text-align: center;
        }



        .colored-container {
            width: 90%;
            height: 80px;
            margin: 10px;
            background: rgba(0, 70.55, 176.37, 0.60);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px
        }

        .container-grande.coluna1 {
            width: 100%;
            height: 75vh;
            background-color: #fff;
            border-radius: 10px;
            margin: 50px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: start;

        }
        .container-grande.coluna2 {
            width: 100%;
            height: 75vh;
            background-color: #fff;
            border-radius: 10px;
            margin: 50px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: start;

        }

        .grafico-container.coluna1 {
            width: 100%;
            height: auto;

        }
        .grafico-container.coluna2 {
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
                <div class="col-sm-4 col-md-4">
                    <div class="container1">
                        <label class="label-pacientes">Pacientes do dia</label>
                        <?php
                        for ($i = 0; $i < 10; $i++) {
                            echo '<div class="colored-container"></div>';
                        }
                        ?>
                    </div>
                    <div class="container1">
                        <label class="label-pacientes">Próximos pacientes</label>
                        <?php
                        for ($i = 0; $i < 10; $i++) {
                            echo '<div class="colored-container"></div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 d-flex justify-content-center">
                    <div class="container-grande coluna1">
                        <div class="grafico-container coluna1">
                            <label class="label1-grafico">Especialidades:</label><br>
                            <label class="label2-grafico">Contagem de consultas marcadas em 2023:</label><br><br><br>
                            <?php
                            include 'utils/graficoanelconsultas.php';
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 d-flex justify-content-center">
                    <div class="container-grande coluna2">
                        
                        <div class="grafico-container coluna2">
                            <label class="label1-grafico">Médicos:</label><br>
                            <label class="label2-grafico">Contagem de consultas marcadas em 2023:</label><br><br><br>
                            <?php
                            include 'utils/graficoanelmedicos.php';
                            ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>