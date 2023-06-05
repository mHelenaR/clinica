<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obter o valor digitado no campo de entrada
  $usuario = $_POST["usuario"];

  // Verificar se o usuário é um paciente ou um médico
  if ($usuario == "paciente") {
    $esconderBotao = true; // Esconder o botão
  } else {
    $esconderBotao = false; // Mostrar o botão
  }
} else {
  // Valor padrão ao carregar a página
  $esconderBotao = false;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Exemplo de esconder botão</title>
</head>
<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="usuario">Digite "paciente" ou "medico":</label>
    <input type="text" id="usuario" name="usuario">
    <input type="submit" value="Enviar">
  </form>

  <?php if (!$esconderBotao): ?>
    <!-- Mostrar o botão se não estiver escondido -->
    <button>Botão</button>
  <?php endif; ?>
</body>
</html>
