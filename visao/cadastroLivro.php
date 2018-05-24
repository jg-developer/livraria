<?php
    require_once "visao/menu.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12">
            <div class="mt-2 text-center">
                <h2>Cadastrar Livro</h2>
            </div>
            <div class="mt-4">
                <form method="POST" action="#">
                    <div class="form-group">
                        <input type="text" required class="form-control" name="titulo" value="" placeholder="Título">
                    </div>
                    <div class="form-group">
                        <select name="genero" class="form-control">
                            <option disabled selected>Selecione o genero</option>
                            <?php
                            foreach ($genero as $g){
                                echo "<option  value='{$g->id_genero}'>{$g->descricao}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="editora" class="form-control">
                            <option disabled selected>Selecione a editora</option>
                            <?php
                            foreach ($editora as $e){
                                echo "<option  value='{$e->id_editora}'>{$e->nome}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="card card-block">
                        <div class="mt-2 text-center">
                            <h5>Autores</h5>
                        </div>

                            <?php
                            foreach ($autor as $a){
                                echo "<div class=\"form-check\">";
                                echo "<label class=\"custom-control custom-checkbox\">";
                                echo "<input name='autor[]' class=\"custom-control-input\" type=\"checkbox\" value='{$a->id_autor}'>";
                                echo "<span class=\"custom-control-indicator\"></span>";
                                echo "<span class=\"custom-control-description\">$a->nome";
                                echo "  ({$a->nacionalidade})</span>";
                                echo "</label>";
                                echo "</div>";
                            }
                            ?>
                    </div>
                    <button style="margin-top: 30px" type="submit" class="btn btn-primary btn-block">Cadastrar Livro</button>
                </form>
            </div>
        </div>
    </div>
</div>
