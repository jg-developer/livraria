<?php require_once "menu.php";?>
    <section class="container">
        <h2 class="text-center">Livros</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Descrição</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                    foreach ($retorno as $dado){
                        echo "<tr>";
                        echo "<td>{$dado->descricao}</td>";
                        echo "</tr>";
                    }
                   ?>
              </tbody>
        </table>
      </section>
    </body>
</html>
