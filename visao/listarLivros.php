<?php require_once "menu.php";?>
    <section class="container">
        <h1 class="text-center">Livros</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Genero</th>
                    <th>editora</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                    foreach ($retorno as $dado){
                        echo "<tr>";
                        echo "<td>{$dado->titulo}</td>";
                        echo "<td>{$dado->genero}</td>";
                        echo "<td>{$dado->editora}</td>";
                        echo "</tr>";
                    }
                   ?>
              </tbody>
        </table>
      </section>
    </body>
</html>
