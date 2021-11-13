<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap">    
    <link rel="stylesheet" href="assets\css\estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <!--<header>teste</header>  
    <main>teste</main>
    <footer>teste</footer>
    <nav>teste</nav>
    <div>teste</div>
    <span>teste</span>-->

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01 - Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">Ola PHP</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">Integração HTML</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">Integração CSS</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">Desafio</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?> 

    </footer>
    

</body>
</html>