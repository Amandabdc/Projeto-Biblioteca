<?php

namespace Book\Biblioteca;

class Livro {

//Propriedades Privadas
    private string $titulo;
    private string $autor;
    private bool $disponivel = false;

//Construtor da classe
    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

//Metodos de ação
    public function marcarComoEmprestado(){
        $this->disponivel = false;
    }

    public function marcarComoDisponivel(){
        $this->disponivel = true;
    }

    public function estaDispoonivel(): bool{
        return $this->disponivel;
    }

//Metodos Getters
    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    
}