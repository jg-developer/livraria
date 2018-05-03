<?php
    class generoControle
    {
        function livrosGenero(){
            $opcao = array("location"=>"http://localhost/livraria/servicos/generoServico.class.php","uri"=>"http://localhost");
            $cli = new soapClient(null, $opcao);
            $retorno = $cli->buscarTodos();
            require_once 'visao/livrosGenero.php';
            if($_POST){
                $opcao = array("location"=>"http://localhost/livraria/servicos/livroServico.class.php","uri"=>"http://localhost");
                $cli = new soapClient(null, $opcao);
                $retorno = $cli->LivrosGenero($_POST["genero"]);
                //var_dump($retorno);
                require_once 'visao/listarLivros.php';
            }
        }
        function inserirGenero(){
            if($_POST){
                $opcao = array("location"=>"http://localhost/livraria/servicos/generoServico.class.php","uri"=>"http://localhost");
                $cli = new soapClient(null, $opcao);
                $cli->inserirGenero($_POST["descricao"]);
                echo "<script>alert('".$_POST["descricao"]." inserido com sucesso')</script>";
                echo "<script>window.location.href='index.php?controle=inicio&metodo=inicio';</script>";
            }
            require_once 'visao/inserirGenero.php';
        }
    }