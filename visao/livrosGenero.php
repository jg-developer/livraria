<?php
require_once "menu.php";?>
    <section class="container">
        <h1 class="text-center">Generos</h1>
        <form method="post" action="#" class="row justify-content-center">
            <div class="form-group">
                    <select name="genero" class="form-control" id="exampleSelect1">
                        <option disabled selected>Selecione um genero</option>
                        <?php
                        foreach ($retorno as $dado){
                            echo "<option  value='{$dado->id_genero}'>{$dado->descricao}</option>";
                        }
                        ?>
                    </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-primary"/>
            </div>
        </form>
      </section>
    </body>
</html>