<?php
class livro
{
    private $id;
    private $titulo;
    private $genero;
    private $editora;
    private $autor;

    public function __construct($id="", $titulo="", $genero="", $editora="", $autor="")
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->editora = $editora;
        $this->autor[] = $autor;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function getEditora()
    {
        return $this->editora;
    }

    public function setEditora($editora)
    {
        $this->editora = $editora;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }



}