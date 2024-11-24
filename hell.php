<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Sorteio</title>
    <link rel="stylesheet" href="from.css">
</head>
<body>
    <div class="container">
        <h1>Resultado do Sorteio</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nomes = isset($_POST['nomes']) ? trim($_POST['nomes']) : '';

            if (!empty($nomes)) {
                $listaNomes = array_map('trim', explode(',', $nomes));
                if (count($listaNomes) > 1) {
                    $sorteado = $listaNomes[array_rand($listaNomes)];
                    echo "<p class='result'>Nome sorteado: <span style='color: blue;'>$sorteado</span></p>";
                } else {
                    echo "<p class='error'>Por favor, insira pelo menos dois nomes.</p>";
                }
            } else {
                echo "<p class='error'>Por favor, insira nomes válidos.</p>";
            }
        } else {
            echo "<p class='error'>Acesso inválido. Volte para a página inicial.</p>";
        }
        ?>
        <a href="trabalho.html"><button>Voltar</button></a>
    </div>
</body>
</html>
