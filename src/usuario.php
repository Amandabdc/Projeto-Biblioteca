<?php

namespace Book\Biblioteca;

class Usuario {
    private string $nome;
    private string $tipo;
    private array $livrosEmprestados = [];//array de livros emprestados

    public function __construct(string $nome, string $tipo) {
        $this->nome = $nome;
        $this->tipo = $tipo;
    }

    public function podePegarEmprestado(): bool{
        if($this->tipo == 'professor' && count($this->livrosEmprestados) < 3){
            
        }
        if($this->tipo == 'aluno' && count($this->livrosEmprestados) < 1){
            return true;
        }
        return false;
    }

    public function adicionarLivroEmprestado(Livro $livro): void{
        $this->livrosEmprestados[] = $livro;
    }

    public function RemoverLivroEmprestador(Livro $livro): void{
        $this->livrosEmprestados = array_filter($this->livrosEmprestados, fn($livroAtual) => $livroAtual !== $livro);
    }

    public function listarLivrosEmprestados(): array{
        return $this->livrosEmprestados;
    }
}