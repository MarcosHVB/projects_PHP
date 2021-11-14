<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também"); // acentuação (caracteres especiais) da erro no cálculo de string
                       //É preciso aplicar o padrão UTF-8]
echo '<br>';

// concatenação - no php é o "."

echo ("Nós também " . 'somos' . '<br>');
echo ("Número é " . 123);
echo '<br>', "Também aceito", " virgulas"; // pro contexto do echo é possível usar virgulas
echo '<br>';
echo '"Teste" ' . "'Teste' " . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe a função print"); // alternativa para o echo
print "<br>Também existe a função print"; // com ou sem parênteses 

// algumas funções
echo '<br>' . strtoupper('maximizado'); //upper case
echo '<br>' . strtolower('MINIMIZADO'); //lower case
echo '<br>' . ucfirst('Só a primeira letra'); //somente a primeira letra upper case, uc = upper case
echo '<br>' . ucwords('Todas as Palavras'); //a primeira letra de cada palavra
echo '<br>' . strlen('Quantas letras?'); // cálcula a quantidade de string
echo '<br>' . strlen('Eu também'); // n se comporta muito bem com acentos
echo '<br>' . mb_strlen("Eu também"); // cálcula o tamanho melhor com acentos
echo '<br>' . mb_strlen("Eu também", "utf-8"); // tbm é possível passar o encoding como paramêtro, mais novo
echo '<br>' . substr('Só uma parte mesmo', 7, 6); //vai começar a ler a partir do 7 e lê 6 casas; 
                                                  //Se n colocar o último paramêtro ele vai até o final
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso'); // pega o primeiro paramêtro e substitui pelo segundo paramêtro informado
                                                            // dentro do que é passado no terceiro paramêtro

