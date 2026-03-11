<?php

namespace Book\Biblioteca;

class Bibliotecario {
    public function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante){
        //usuario pode pegar emprestador
        if($livro->estaDisponivel()){
            return false;
        }
        
        if($usuario->podePegarEmprestado()){
            return false;
        }

        if($estante->buscarLivrosPorTitulo($livro->getTitulo())){
            return false;
        }

        $livro->marcarComoEmprestado();
        $usuario->adicionarLivroEmprestado($livro);
        $estante->RemoverLivro($livro);

        return true;
    }

    public function devolverLivro(Usuario $usuario, Livro $livro, Estante $estante){
        if($livro->estaDisponivel()){
            return false;
        }

        if($estante->buscarLivrosPorTitulo($livro->getTitulo())){
            return false;
        }

        $usuario->RemoverLivroEmprestador($livro);
        $estante->adicionarLivro($livro);
        $livro->marcarComoDisponivel();

        return true;
    }
}