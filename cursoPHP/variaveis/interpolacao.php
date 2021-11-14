<div class="titulo">Interpolação</div>

<?php

    $numero = 10;
    echo $numero;
    echo '<br> $numero';
    echo "<br> $numero + 1";

    $texto = "a sua nota é: $numero";
    echo "<BR> $texto";

    $objeto = 'caneta';
    echo "<br> Eu tenho 5 $objetos";
    echo "<br> Eu tenho {$objeto}s";
    echo "<br> Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s"; // espaço no começo da problema
    echo "<br> $numero + 1";
    //echo "<br> {$numero + 1}"; não funciona