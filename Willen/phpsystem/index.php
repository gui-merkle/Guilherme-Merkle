<?php
// Função de Fibonacci em PHP
function fibonacci($n) {
    $f = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $f[$i] = bcadd($f[$i - 1], $f[$i - 2]); // Usa 'bcadd' para lidar com números grandes
    }
    return $f;
}

$phpResult = "";
$phpExecutionTime = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['phpFunction1']) && isset($_POST['fibNumber'])) {
    // Se a função PHP for chamada e o número de Fibonacci estiver definido
    $n = intval($_POST['fibNumber']);
    
    // Iniciar contagem do tempo
    $startTime = microtime(true);
    
    // Executar a função de Fibonacci
    $fib = fibonacci($n);
    
    // Terminar contagem do tempo
    $endTime = microtime(true);
    $executionTime = $endTime - $startTime;
    
    // Exibir resultado da última execução
    $phpResult = "Último valor de Fibonacci calculado (PHP): " . $fib[$n];
    $phpExecutionTime = "Tempo de execução em PHP: " . number_format($executionTime, 8) . " segundos";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Desempenho PHP vs JavaScript</title>
    <link rel="stylesheet" href="assets/style.css" >
    <script src="assets/script.js" defer></script>
</head>
<body>
    <h1>Teste de Desempenho: PHP vs JavaScript</h1>
    <div class="container">

        <!-- Função 1 - Fibonacci -->
        <div class="box">
            <h2>Sequência de Fibonacci</h2>
            <form method="POST">
                <label for="fibNumber">Insira o número de termos (até 1000):</label>
                <input type="number" name="fibNumber" id="fibNumber" min="0" max="1000" required>
                <br><br>
                <button type="button" onclick="runJSFunction1()">Rodar em JavaScript</button>
                <button type="submit" name="phpFunction1">Rodar em PHP</button>
            </form>
            <p id="jsResult"></p>
            <p class="result">
                <?php
                    if (!empty($phpResult)) {
                        echo $phpResult;
                    }
                    if (!empty($phpExecutionTime)) {
                        echo "<br>" . $phpExecutionTime;
                    }
                ?>
            </p>
        </div>

        <!-- Função 2 -->
        <div class="box">
            <h2>Função 2</h2>
            <button onclick="runJSFunction2()">Rodar em JavaScript</button>
            <form method="POST">
                <button type="submit" name="phpFunction2">Rodar em PHP</button>
            </form>
        </div>

        <!-- Função 3 -->
        <div class="box">
            <h2>Função 3</h2>
            <button onclick="runJSFunction3()">Rodar em JavaScript</button>
            <form method="POST">
                <button type="submit" name="phpFunction3">Rodar em PHP</button>
            </form>
        </div>

        <!-- Função 4 -->
        <div class="box">
            <h2>Função 4</h2>
            <button onclick="runJSFunction4()">Rodar em JavaScript</button>
            <form method="POST">
                <button type="submit" name="phpFunction4">Rodar em PHP</button>
            </form>
        </div>

    </div>
</body>
</html>
