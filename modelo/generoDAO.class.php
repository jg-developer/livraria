<?php
class generoDAO extends conexao{
    function __construct()
    {
        parent:: __construct();
    }
    function buscarTodosGeneros()
    {
        $sql = "SELECT * FROM genero";
        try
        {
            $f = $this->db->prepare($sql);
            $ret = $f->execute();
            $this->db = null;
            if(!$ret)
            {
                die ("Erro ao buscar todos os generos");
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
    function inserirGenero($genero){
        $sql = "INSERT INTO genero (descricao) VALUE (?)";

        try
        {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(1, $genero->getDescricao());
            $ret =$stmt->execute();
            $this->db = null;
            if(!$ret)
            {
                die("Erro ao inserir genero");
            }
        }
        catch (PDOException $e)
        {
            die ($e->getMessage());
        }
    }
}
