<?php
require_once "menu.php";?>
    <section class="container">
        <h2 class="text-center">Editoras</h2>
        <form method="post" action="#" class="row justify-content-center">
            <div class="form-group">
                    <select name="editora" class="form-control" id="exampleSelect1">
                        <option disabled selected>Selecione uma editora</option>
                        <?php
                        foreach ($retorno as $dado){
                            echo "<option  value='{$dado->id_editora}'>{$dado->nome}</option>";
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