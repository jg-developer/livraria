<?php
class autorDAO extends conexao{
    function __construct()
    {
        parent:: __construct();
    }
    function buscarTodosAutores()
    {
        $sql = "SELECT * FROM autor";
        try
        {
            $f = $this->db->prepare($sql);
            $ret = $f->execute();
            $this->db = null;
            if(!$ret)
            {
                die ("Erro ao buscar todos os autores");
            }
            else
            {
                $retorno = $f->fetchAll(PDO::FETCH_OBJ);
                return $retorno;
            }
        }
        catch ( Exception $e )
        {
            die ($e->getMessage());
        }
    }

}
