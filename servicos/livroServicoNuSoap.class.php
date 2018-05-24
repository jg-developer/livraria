<?php
    require_once "../modelo/conexao.class.php";
    require_once "../modelo/autor.class.php";
    require_once "../modelo/livro.class.php";
    require_once "../modelo/livroDAO.class.php";
    require_once "../modelo/genero.class.php";
    require_once "../modelo/editora.class.php";
    require_once "../lib/nusoap.php";

    //servidor
    $server = new nusoap_server();

    //iniciar parametrização do WSDL
    $server->configureWSDL("livroServico");
    $server->wsdl->schemaTargetNamespace = "urn:livroServico";
    class livroServicoNuSoap {
        function livrosEditora($editora){
            $idEditora = new editora($editora);
            $livro = new livro("","","",$idEditora, "");
            $livroDAO = new livroDAO();
            $ret = $livroDAO->livrosEditora($livro);
            return json_encode($ret);
        }
    }
    $server->register("livroServicoNuSoap.livrosEditora",
                        array("editora"=>"xsd:int"),
                        array("retorno"=>"xsd:string"),
                        "urn:livroServico", //namespace
                        "urn:livroServico#livrosEditora", //soapaction
                        "rpc", //estilo
                        "encode",
                        "Buscar livros por editora");

    //pega a requisição
    $chamada = file_get_contents("php://input");
    //executa a operação requisitada
    $server->service($chamada);