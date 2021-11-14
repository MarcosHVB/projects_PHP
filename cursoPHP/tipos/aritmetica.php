<div class="titulo">Operações Aritméticas</div>

<?php
    echo 1 + 1;
    echo '<br>';
    var_dump(1 + 1);
    echo '<br>';
    echo 1 + 2.5, '<br>';
    echo 10 - 2, '<br>';
    echo 2 * 5, '<br>';
    echo 7 / 4, '<br>';
    echo intdiv(7,4), '<br>'; // retornar resultado inteiro
    echo round(7 / 4), '<br>'; // arredondar para um valor
    echo 7 % 4, '<br>'; //retorna o resto
    // echo intdiv(7, 0); # erro
    echo 4 ** 2, '<br>'; // potência

    // Precedência dos Operadores
    // () => ** => / * % => + - 
    echo '<p>Precedência</p>';
    echo 2 + 3 * 4, '<br>';
    echo (2 + 3) * 4, '<br>';
    echo 2 + 3 * 4 ** 2, '<br>';
    echo ((2 + 3) * 4) ** 2, '<br>';

    //operadores unarios, binarios, 

