<?php
    require_once "../modelo/conexao.class.php";
    require_once "../modelo/autor.class.php";
    require_once "../modelo/livro.class.php";
    require_once "../modelo/livroDAO.class.php";
    require_once "../modelo/genero.class.php";
    require_once "../modelo/editora.class.php";

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
        function cadastrarLivro($titulo, $genero, $editora, $autores){
            $idGenero = new genero($genero);
            $idEditora = new editora($editora);
            $idAutor = new autor($autores[0]);
            $livro = new livro("", $titulo, $idGenero, $idEditora, $idAutor);
            if(count($autores) > 1){
                for($x=1;$x < count($autores); $x++){
                  $idAutor = new autor($autores[$x]);
                  $livro->setAutor($idAutor);
                }
            }
            $livroDAO = new livroDAO();
            $ret = $livroDAO->cadastrarLivro($livro);
        }
    }
    $server->setObject(new livroServico());
    $server->handle();
    //$tste = new livroServico();
    //$array = array(1,2);
    //$retorno = $tste->cadastrarLivro("Teste", 1, 1, $array);
    //var_dump($retorno);
