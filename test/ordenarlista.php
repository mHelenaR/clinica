<?php
// Array com os dados da tabela
$dados = array(
    array("nome" => "Maria", "idade" => 30),
    array("nome" => "João", "idade" => 25),
    array("nome" => "Ana", "idade" => 35),
    array("nome" => "Pedro", "idade" => 28)
);

$ordenacao = "ASC"; // Ordenação inicial

if (isset($_GET['ordem'])) {
    if ($_GET['ordem'] === "ASC") {
        $ordenacao = "DESC";
        usort($dados, function ($a, $b) {
            return strcmp($b['nome'], $a['nome']);
        });
    } else {
        $ordenacao = "ASC";
        usort($dados, function ($a, $b) {
            return strcmp($a['nome'], $b['nome']);
        });
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tabela Ordenada por Nome</title>
</head>
<style>
    .rounded-box {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
    }
</style>

<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php foreach ($dados as $index => $linha) : ?>
            <tr>
                <td>
                    <div class="rounded-box"><?php echo $linha["nome"]; ?></div>
                </td>
                <td>
                    <div class="rounded-box"><?php echo $linha["idade"]; ?></div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


    <form action="" method="get">
        <button type="submit" name="ordem" value="<?php echo $ordenacao; ?>">Ordenar por Nome <?php echo ($ordenacao === "ASC") ? "↑" : "↓"; ?></button>
    </form>
</body>

</html>