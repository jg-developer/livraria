<?php
    require_once "../modelo/conexao.class.php";
    require_once "../modelo/autor.class.php";
    require_once "../modelo/livro.class.php";
    require_once "../modelo/livroDAO.class.php";
    require_once "../modelo/genero.class.php";

    //servidor
    $opcao = array("uri"=>"http://localhost");
    $server = new soapServer(null, $opcao);
    class livroServico {
        function buscarTodosLivros(){
            $livroDAO = new livroDAO();
            $ret = $livroDAO->buscarTodosLivros();
            return $ret;
        }
        function LivrosAutor($autor){
            $idAutor = new autor($autor);
            $livro = new livro("","","","",$idAutor);
            $livroDAO = new livroDAO();
            $ret = $livroDAO->livrosAutor($livro);
            return $ret;
        }
        function LivrosGenero($genero){
            $idGenero = new genero($genero);
            $livro = new livro("","",$idGenero);
            $livroDAO = new livroDAO();
            $ret = $livroDAO->livrosGenero($livro);
            return $ret;
        }
    }
    $server->setObject(new livroServico());
    $server->handle();
    //$tste = new livroServico();
    //$retorno = $tste->LivrosGenero(1);
    //var_dump($retorno);
