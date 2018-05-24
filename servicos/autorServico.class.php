<?php
require_once "../modelo/conexao.class.php";
require_once "../modelo/autorDAO.class.php";

//servidor
$opcao = array("uri"=>"http://localhost");
$server = new soapServer(null, $opcao);

class autorServico
{
    function buscarTodos(){
        $autoresDAO = new autorDAO();
        $ret = $autoresDAO->buscarTodosAutores();
        return $ret;
    }
}
$server->setObject(new autorServico());
$server->handle();