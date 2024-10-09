function runJSFunction1() {
    // Pegar o número fornecido pelo usuário
    const n = parseInt(document.getElementById('fibNumber').value);

    if (isNaN(n) || n < 0) {
        alert("Por favor, insira um número válido.");
        return;
    }

    // Função de Fibonacci em JavaScript
    function fibonacciJS(num) {
        let fib = [0, 1];
        for (let i = 2; i <= num; i++) {
            fib[i] = fib[i - 1] + fib[i - 2];
        }
        return fib;
    }

    // Iniciar a contagem do tempo de execução
    const startTime = performance.now();

    // Calcular Fibonacci
    const fibResult = fibonacciJS(n);

    // Terminar a contagem do tempo
    const endTime = performance.now();
    const executionTime = (endTime - startTime) / 1000; // Convertido para segundos

    // Exibir o resultado em um alert
    alert(`Último valor de Fibonacci (JavaScript): ${fibResult[n]}\nTempo de execução: ${executionTime.toFixed(8)} segundos`);
}


// Função 2 - JavaScript
function runJSFunction2() {
    alert("Função 2 executada em JavaScript.");
    // Adicione a lógica da função 2 aqui.
}

// Função 3 - JavaScript
function runJSFunction3() {
    alert("Função 3 executada em JavaScript.");
    // Adicione a lógica da função 3 aqui.
}

// Função 4 - JavaScript
function runJSFunction4() {
    alert("Função 4 executada em JavaScript.");
    // Adicione a lógica da função 4 aqui.
}
