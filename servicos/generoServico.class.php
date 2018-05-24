<?php
    require_once "../modelo/conexao.class.php";
    require_once "../modelo/genero.class.php";
    require_once "../modelo/generoDAO.class.php";

    //servidor
    $opcao = array("uri"=>"http://localhost");
    $server = new soapServer(null, $opcao);
    class generoServico{
        function buscarTodos(){
            $generoDAO = new generoDAO();
            $ret = $generoDAO->buscarTodosGeneros();
            return $ret;
        }
        function inserirGenero($genero){
            $genero = new genero("", $genero);
            $generoDAO = new generoDAO();
            $generoDAO->inserirGenero($genero);
        }
    }

    $server->setObject(new generoServico());
    $server->handle();