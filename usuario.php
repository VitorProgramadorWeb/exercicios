<?php
    $nome = $_POST['nome'];
    $num = $_POST['numero-de-vezes'];
    $x = 0;
    
    // While
    echo "While: <br>";
    $x = 0;
    while ($x < $num) {
        echo ($x+1)."° - Bem vindo(a) $nome!<br>";
        $x++;
    }
    
    // Do-while
    echo "<br>Do-while: <br>";
    $x = 0;
    do {
        echo ($x+1)."° - Bem vindo(a) $nome!<br>";
        $x++;
    } while ($x < $num);
    
    // For
    echo "<br>For: <br>";
    $x = 0;
    for(;$x < $num; $x++) {
        echo ($x+1)."° - Bem vindo(a) $nome!<br>";
    }
    
    // Foreach
    echo "<br>Foreach: <br>";
    $nums = array();
    for ($i=0; $i < $num; $i++) { // Criando um array para Foreach
        array_push($nums, $i);
    }
    foreach ($nums as $numb) {
        echo ($numb+1)."° - Bem vindo(a) $nome!<br>";
    }

?>