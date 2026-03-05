<?php

namespace Book\Biblioteca;

class Professor extends Usuario{
    private const MAX_LIVROS_EMPRESTADOS = 3;

    public function podePegarEmprestado(): bool{
        return(count($this->livrosEmprestados) < self::MAX_LIVROS_EMPRESTADOS); //self é para constantes estaticas
    }
}