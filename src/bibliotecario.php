<?php

namespace Book\Biblioteca;

class Bibliotecario {
    public static function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante){
        //usuario pode pegar emprestador
        if($livro->estaDisponivel()){
            return false;
        }
        
        if($usuario->podePegarEmprestado()){
            return false;
        }

        if(!$estante->verificarLivro($livro)){
            return false;
        }

        $livro->marcarComoEmprestado();
        $usuario->adicionarLivroEmprestado($livro);
        $estante->RemoverLivro($livro);

        return true;
    }

    public static function devolverLivro(Usuario $usuario, Livro $livro, Estante $estante){
        if($livro->estaDisponivel()){
            return false;
        }

        if($estante->buscarLivrosPorTitulo($livro->getTitulo())){
            return false;
        }

        if(!in_array($livro, $usuario->listarLivrosEmprestados())){
            return false;
        }

        $usuario->RemoverLivroEmprestador($livro);
        $estante->adicionarLivro($livro);
        $livro->marcarComoDisponivel();

        return true;
    }
}