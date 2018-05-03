<?php
class livroDAO extends conexao{
    function __construct()
    {
        parent:: __construct();
    }
    function buscarTodosLivros()
    {
        $sql = "SELECT * FROM vw_livros";
        try
        {
            $f = $this->db->prepare($sql);
            $ret = $f->execute();
            $this->db = null;
            if(!$ret)
            {
                die ("Erro ao buscar todos os livros");
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
    function livrosAutor($livro)
    {
        $sql = "SELECT l.titulo 'titulo', g.descricao 'genero', e.nome 'editora'
                FROM autor_livro a
                INNER JOIN livro l ON (a.id_livro = l.id_livro)
                INNER JOIN genero g ON (l.id_genero = g.id_genero)
                INNER JOIN editora e ON (e.id_editora = l.id_editora)
                WHERE a.id_autor = ?";
        try
        {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(1, $livro->getAutor()[0]->getId());
            $ret = $stmt->execute();
            $this->db = null;
            if(!$ret)
            {
                die("Erro ao buscar livros");
            }
            else
            {
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            }
        }
        catch (PDOException $e)
        {
            die( $e->getMessage());
        }
    }
    function livrosGenero($livro)
    {
        $sql = "SELECT l.titulo 'titulo', g.descricao 'genero', e.nome 'editora'
                FROM livro l
                INNER JOIN genero g ON (l.id_genero = g.id_genero)
                INNER JOIN editora e ON (e.id_editora = l.id_editora)
                WHERE l.id_genero = ?";
        try
        {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(1, $livro->getGenero()->getId());
            $ret = $stmt->execute();
            $this->db = null;
            if(!$ret)
            {
                die("Erro ao buscar livros");
            }
            else
            {
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            }
        }
        catch (PDOException $e)
        {
            die( $e->getMessage());
        }
    }
}
