<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha biblioteca</title>
</head>
<body>
    <pre>
    <?php

    require_once'vendor/autoload.php';

    use Book\Biblioteca\Livro;
    use Book\Biblioteca\Estante;
    use Book\Biblioteca\Aluno;
    use Book\Biblioteca\Professor;
    use Book\Biblioteca\Visitante;

    echo 'Sistema de Biblioteca ! <br>';

        $livro1 = new Livro('Dom Quixote', 'Miguel de Cervantes');
        $livro2 = new Livro('Harry Potter - a Pedra Filosofal', 'J.K. Rowling');

        $livro1->estaDisponivel();
        $livro2->estaDisponivel();

        print_r($livro1);
        echo '<br>';

        print_r($livro2);
        echo '<br>';

    
        $estante = new Estante();
        $estante->adicionarLivro($livro1);
        $estante->adicionarLivro($livro2);

        echo '<br>';

        print_r($estante);

        echo '<br>';

        $livroEncontrado = $estante->buscarLivrosPorTitulo('Dom');

        print_r($livroEncontrado);

        echo '<br>';

        $professor = new Professor('Lucia', 'professor');
        $professor->adicionarLivroEmprestado($livro1);


        print_r($professor);

        echo '<br>';

        $aluno = new Aluno('Joao', 'aluno');
        $aluno->adicionarLivroEmprestado($livro2);
        $aluno->podePegarEmprestado();

        print_r($aluno);

    ?>
    </pre>
</body>
</html>