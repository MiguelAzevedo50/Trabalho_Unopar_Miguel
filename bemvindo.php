<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <main class="borda_bemvindo">
            <div class="bemvindo_container">
                <h1 class="bemvindo_titulo">Bem vindo <?= $usuario ?></h1>
                <hr class="linha">
                <h2>Obrigado por acessar</h2>
            </div>
        </main>
    </body>
</html>
