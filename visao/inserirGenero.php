<?php
    require_once "visao/menu.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12">
            <div class="mt-2 text-center">
                <h2>Inserir Genero</h2>
            </div>
            <div class="mt-4">
                <form method="POST">
                    <div class="form-group">
                        <input type="text" required class="form-control" name="descricao" value="" placeholder="Descrição">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Inserir Genero</button>
                </form>
             </div>
        </div>
    </div>
</div>