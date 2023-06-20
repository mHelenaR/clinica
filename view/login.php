<!DOCTYPE html>
<html>

<head>
    <title>Bem vindo de volta...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


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

        .meu-carrossel {
        
            width: 100%;
            border-radius: 20px;
            overflow: hidden;
            height: 700px;
            background-color: aquamarine;

        }

    
    </style>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12 col-md-8 d-flex justify-content-center align-items-center">

                    <div id="meuCarrossel" class="carousel slide meu-carrossel" data-ride="carousel">
                        <?php include 'components/carrossel.php' ?>
                    </div>

                </div>

                <div class="col-sm-12 col-md-4 d-flex justify-content-center">
                    <div class="containerForm">
                        <div class="form">
                            <form method="post" action="/login">
                                <label>Bem-vindo(a)</label><br>
                                <label>de volta!</label><br>
                                <input id="email" name="email" type="" placeholder="E-mail" /><br><br>
                                <input id="senha" name="senha" type="password" placeholder="Senha" /><br>

                                <button type="submit" name="btn_Entrar">Entrar</button><br>
                                <label>Ainda não possui uma conta?</label><br>
                                <label>CADASTRAR-SE</label><br>
                            </form>
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


<!---
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
</head>

<body>
    <form method="post" action="/login">

        <label for="email">E-mail: </label>
        <input id="email" name="email" type="" />

        <label for="senha">Senha: </label>
        <input id="senha" name="senha" type="text" />

        <button type="submit" name="btn_Entrar">Entrar</button>
    </form>
</body>

</html> --->