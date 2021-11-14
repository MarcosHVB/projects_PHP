<div class="titulo">Desafio Precedência</div>

<?php
echo '<p>1. Qual o valor impresso?</p>';
echo 2 + 5 * 3 + (12  / 6) / (-8 + 2 ** 3); // divisão por 0 tende ao infinito, resultado: INF
        //17
echo '<p>2. Qual expressão imprime o valor 100?</p>';
echo 'a) ', (1 + 2) * 20 - 15, '<br>';
echo 'b) ', 4 * 5 ** 2, '<br>'; // 100, resposta certa
echo 'c) ', 2 ** 3 ** 4 / 1e25, '<br>';
echo 'd) ', 3 + (3 * 8) / 2 - 3, '<br>';