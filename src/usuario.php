<?php

namespace Book\Biblioteca;

abstract class Usuario {
    protected string $nome;
    protected array $livrosEmprestados = [];//array de livros emprestados

    public function __construct(string $nome, string $tipo) {
        $this->nome = $nome;
    }

    abstract function podePegarEmprestado(): bool;

    public function adicionarLivroEmprestado(Livro $livro): void{
        if($this->podePegarEmprestado()){
            $this->livrosEmprestados[] = $livro;
        }else {
            throw new \Exception('Usuario nao pode pegar emprestado');
        }
    
        $this->livrosEmprestados[] = $livro;
    }

    public function RemoverLivroEmprestador(Livro $livro): void{
        $this->livrosEmprestados = array_filter($this->livrosEmprestados, fn($livroAtual) => $livroAtual !== $livro);
    }

    public function listarLivrosEmprestados(): array{
        return $this->livrosEmprestados;
    }
}