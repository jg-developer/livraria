<?php
    require_once "../modelo/conexao.class.php";
    require_once "../modelo/editora.class.php";
    require_once "../modelo/editoraDAO.class.php";

    //servidor
    $opcao = array("uri"=>"http://localhost");
    $server = new soapServer(null, $opcao);
    class editoraServico
    {
        function buscarTodas(){
            $editoraDAO = new editoraDAO();
            $ret = $editoraDAO->buscarTodasEditoras();
            return $ret;
        }
    }
    $server->setObject(new editoraServico());
    $server->handle();
    //$tste = new editoraServico();
    //$retorno = $tste->buscarTodas();
    //var_dump($retorno);