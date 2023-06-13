<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
</head>

<body>
    <form method="post" action="/cadastrar">
        <input id="tipo" name="tipo" type="hidden" value="paciente" />

        <label for="nome">Nome Completo: </label>
        <input id="nome" name="nome" type="text" />

        <label for="email">E-mail: </label>
        <input id="email" name="email" type="" />

        <label for="CRM">CRM: </label>
        <input id="CRM" name="CRM" type="text" />

        <label for="Especialidade">Especialidade: </label>
        <input id="Especialidade" name="Especialidade" type="text" />

        <label for="senha">Senha: </label>
        <input id="senha" name="senha" type="text" />

        <button type="submit">Cadastrar</button>
    </form>

    
</body>

</html>