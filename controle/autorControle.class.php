<?php
require_once "buscaClasse.php";
class autorControle
{
    function listarTodos(){
        $opcao = array("location"=>"http://localhost/livraria/servicos/autorServico.class.php","uri"=>"http://localhost");
        $cli = new soapClient(null, $opcao);
        $retorno = $cli->buscarTodos();
        require_once 'visao/autoresLivro.php';
        if($_POST){
            $opcao = array("location"=>"http://localhost/livraria/servicos/livroServico.class.php","uri"=>"http://localhost");
            $cli = new soapClient(null, $opcao);
            $retorno = $cli->LivrosAutor($_POST["autor"]);
            //var_dump($retorno);
            require_once 'visao/listarLivros.php';
        }
    }
}