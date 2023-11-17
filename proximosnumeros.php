<?php
    $num = $_POST['numero'];

    // Se não tiver entrada
    if($num == null) {
        $num = 0;
    }

    for($i = $num+1; $i <= $num+50; $i++) {
        echo "$i <br>";
    }
?>