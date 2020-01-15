<?php /* @var $tarefa Tarefa */ ?>

<div class="row">
    <div class="col-md-offset-3 col-md-6">
        <form  method="POST" >
            <fieldset>
                <!-- Form Name -->
                <legend><?= $title ?></legend>
                <?php
                  echo htmlHelper::sumarioDeErros($model->erros);
                ?>
                <div class="form-group">

                    <label class=" control-label" for="inputNome">Nome</label>
                    <div class="input-group">
                        <input id="inputNome" name="nome" value="<?= $model->nome ?>" class="form-control input-md" required>
                    </div>

                </div>
                
                <div class="form-group">
                    <label class=" control-label" for="submitButton"></label>

                    <button id="submitButton" name="enviar" class="btn btn-primary btn-block">Calcular</button>
                    <button id="cancel" name="cancel" class="btn btn-inverse btn-block">Cancelar</button>

                </div>

            </fieldset>
        </form>
    </div>
</div>