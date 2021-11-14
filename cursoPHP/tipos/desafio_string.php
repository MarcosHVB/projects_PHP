<div class="titulo">Desafio String</div>

<?php

// !AbcaBcabc

echo substr_count('!AbcaBcabc', 'abc'), '<br>'; // retorna o índice em que a palavra foi encontrada

echo strpos('!AbcaBcabc', 'abc'), '<br>'; // retorna a posição em que começa a string pesquisada. 
echo strpos(strtolower('!AbcaBcabc'), 'abc'), '<br>'; // retorna a posição em que começa a string pesquisada. 
echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC')), '<br>'; // retorna a posição em que começa a string pesquisada. 
                                          // Considera letras maiusculas e minusculas
echo stripos('!AbcaBcabc', 'abc'), '<br>'; // Não onsidera letras maiusculas e minusculas

echo stristr('!AbcaBcabc', 'abc');