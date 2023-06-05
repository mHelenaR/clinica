<!DOCTYPE html>
<html>
<head>
    <title>Carregar Formulário</title>
</head>
<body>
    <?php
    $formularioAtual = isset($_GET['formulario']) ? $_GET['formulario'] : 1;

    if ($formularioAtual == 1) {
        include 'formulario1.php';
    } elseif ($formularioAtual == 2) {
        include 'formulario2.php';
    }
    ?>

    <button onclick="carregarFormulario()">Novo</button>

    <script>
        function carregarFormulario() {
            window.location.href = "formpai.php?formulario=2";
        }
    </script>
</body>
</html>
