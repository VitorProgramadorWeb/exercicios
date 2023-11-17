<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Calculadora</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilos/estilo.css" type="text/css">
</head>
<body>

    <div class="calculadora">
        <form action="operacao.php" method="get">
            <input class="num num1" type="number" name="x">
    
            <select class="operadores" name="operador" id="">
                <option value="soma">+</option>
                <option value="subtracao">-</option>
                <option value="multiplicacao">×</option>
                <option value="divisao">÷</option>
            </select>
            
            <input class="num num2" type="number" name="y">
    
            <input class="enviar" type="submit" value="Calcular">
        </form>
    </div>

    <div class="form-user">
        <form action="usuario.php" method="post">
            <div>Digite o seu nome:</div>
            <input type="text" name="nome">
            <div>Digite um número:</div>
            <input type="number" name="numero-de-vezes">
            <input class="botao-retro" type="submit">
        </form>
    </div>

    <div class="prox-50">
        <form action="proximosnumeros.php" method="post">
            <div style="background-color: black; color: white; padding: 5px; font-weight: bold;">Saiba os próximos 50 números de um número</div>
            <div>Digite um número:</div>
            <input type="number" name="numero">
            <input class="botao-retro" type="submit">
        </form>
    </div>

</body>
</html>