<?php
    require_once "../modelo/conexao.class.php";
    require_once "../modelo/genero.class.php";
    require_once "../modelo/generoDAO.class.php";
    require_once "../lib/nusoap.php";
    //servidor
    $server = new nusoap_server();

    //iniciar parametrização do WSDL
    $server->configureWSDL("generoServico");
    $server->wsdl->schemaTargetNamespace = "urn:generoServico";
    class generoServicoNuSoap{
        function buscarTodos(){
            $generoDAO = new generoDAO();
            $ret = $generoDAO->buscarTodosGeneros();
            return json_encode($ret);
        }
        function inserirGenero($genero){
            $genero = new genero("", $genero);
            $generoDAO = new generoDAO();
            $generoDAO->inserirGenero($genero);
        }
    }

    $server->register("generoServicoNuSoap.buscarTodos",
                        array(),
                        array("retorno"=>"xsd:string"),
                        "urn:generoServico", //namespace
                        "urn:generoServico#buscarTodos", //soapaction
                        "rpc", //estilo
                        "encode",
                        "Buscar todos os generos");

    //pega a requisição
    $chamada = file_get_contents("php://input");
    //executa a operação requisitada
    $server->service($chamada);