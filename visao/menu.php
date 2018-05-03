<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Livraria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#inicio">Livraria</a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controle=livroControle&metodo=listarLivros">Listar Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controle=livroControle&metodo=listarTodos">Livros Serviço</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controle=autorControle&metodo=listarTodos">Livros por autores serviço</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controle=generoControle&metodo=livrosGenero">Livros por genero</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controle=generoControle&metodo=inserirGenero">Inserir Genero</a>
                    </li>
                </ul>
            </div>
        </nav>
        <script src="js/jquery-3.1.1.slim.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
