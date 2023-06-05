<!DOCTYPE html>
<html>
<head>
    <title>Lista de Containers Escurecidos</title>
    <style>
        .container {
            width: 200px;
            height: 100px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
        $numContainers = 5; // Número de containers

        for ($i = 1; $i <= $numContainers; $i++) {
            $opacity = $i / $numContainers; // Calcula a opacidade baseado no índice

            // Converte a opacidade em um valor RGB para a cor de fundo
            $red = 0;
            $green = 0;
            $blue = 0;
            $backgroundColor = "rgba($red, $green, $blue, $opacity)";

            echo "<div class='container' style='background-color: $backgroundColor'></div>";
        }
    ?>
</body>
</html>
