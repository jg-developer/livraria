<?php
    if ($_GET)
    {
        $controle = $_GET['controle'];
        $metodo = $_GET["metodo"];
        require_once "controle/" . $controle. ".class.php";
        $obj = new $controle();
        $obj->$metodo();
    }
    else
    {
        require_once "controle/inicio.class.php";
        $ini = new inicio();
        $ini->inicio();
    }
?>
