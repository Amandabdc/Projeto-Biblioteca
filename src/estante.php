<?php
namespace Book\Biblioteca;

class Estante{
    private array $livros = [];

    public function adicionarLivro(Livro $livro): void{
        $this->livros[] = $livro;
    }

    public function RemoverLivro(Livro $livro): void{
        $this->livros = array_filter($this->livros, fn($livroAtual) => $livroAtual !== $livro);
    }

    public function verificarLivro(Livro $livro): bool{
        return in_array($livro, $this->livros);
    }

    public function buscarLivrosPorTitulo(string $titulo): ?Livro{
        foreach($this->livros as $livro){
            if (strpos(strtolower($livro->getTitulo()), strtolower($titulo))){
                return $livro;
            }
        }
        return null;
    }

    public function listarLivrosDisponiveis(): array{
        return array_filter($this->livros, function ($livroAtual) {
            return $livroAtual->estaDisponivel();
        });
    }
        
} 


?>