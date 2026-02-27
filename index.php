<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Calculadora de Area</title>
</head>
<body>
    <pre>
    <?php
    
    require_once'vendor/autoload.php';

    use Book\Biblioteca\Livro;

    echo 'Sistema de Biblioteca ! <br>';

        $livro = new Livro('O Senhor dos Aneis', 'JRR Tolkien');
        $livro->getTitulo();
        $livro->estaDispoonivel();

        var_dump($livro);

    ?>
    </pre>
</body>
</html>