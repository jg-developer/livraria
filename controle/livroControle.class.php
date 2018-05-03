<?php
    require_once "buscaClasse.php";
    class livroControle {
        function listarLivros(){
            $livroDAO = new livroDAO();
            $retorno = $livroDAO->buscarTodosLivros();
            require_once 'visao/listarLivros.php';
        }
        function listarTodos(){
          $opcao = array("location"=>"http://localhost/livraria/servicos/livroServico.class.php","uri"=>"http://localhost");
          $cli = new soapClient(null, $opcao);
          $retorno = $cli->buscarTodosLivros();
          require_once 'visao/listarLivros.php';
        }
    }
?>
