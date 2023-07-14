<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link href="../view/components/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../view/css/botao.css">
    <style>
        .custom-header {
            background-color: #2C416C;
        }
    </style>
</head>

<body>
    <main>
        <header class="p-3 custom-header">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap" />
                        </svg>
                    </a>
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="/" class="nav-link px-2 text-white">Página Inicial</a></li>
                        <li><a href="/paciente" class="nav-link px-2 text-white">Pacientes</a></li>
                        <li><a href="/paciente" class="nav-link px-2 text-white">Médicos</a></li>
                        <li><a href="/consulta" class="nav-link px-2 text-white">Consultas</a></li>
                    </ul>
                    <div class="text-end">
                        <label class="label px-2 text-white">
                            <?php
                            echo $_SESSION["array_usuario"]['usua_nome'];
                            ?>
                        </label>
                        <button type="button" class="btn btn-warning">Sair</button>
                    </div>
                </div>
            </div>
        </header>

    </main>
    <script src="../view/components/assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>