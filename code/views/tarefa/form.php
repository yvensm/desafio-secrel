<?php 
    /* @var $tarefa Tarefa */

    if($type === "Form"){
        $form = "Criar nova tarefa";
        $action = "tarefaInserir.php";
        $checkbox = "disabled";
        $values = false;
    }else{
        $form = "Editar tarefa";
        $action = "tarefaUpdate.php";
        $checkbox = "";
        $values = true;
    }
?>
<script>


    const limparCampos = () => {
        $("#formTarefa input").val("");
    }
</script>

<div class="row">
    <div class="col-md-offset-1 col-md-8">
        <p class="h1"><?php echo $form; ?></p>
        <form  method="POST" action=<?php echo $action?> id="formTarefa" >
        
            <fieldset>
                <!-- Form Name -->
                <legend><?= $title ?></legend>
                <?php
                echo htmlHelper::sumarioDeErros($model->erros);
                ?>
                <div class="row">

                    <div class="col-md-8">
                        
                        <div class="form-group">
                            <input type="text" style="display:none" name='id' id="id" <?php echo 'value='.$tarefa->id;?>>

                            <label class=" control-label" for="inputNome">Nome</label>
                            <div class="input-group">
                                <input <?php echo $values ? 'value='.$tarefa->nome : '';?> type ="text" id="inputNome" name="nome" class="form-control input-md" required>
                            </div>
                            
                            <label class=" control-label" for="inputDescricao">Descrição</label>
                            <div class="input-group">
                                <input <?php echo $values ? 'value='.$tarefa->descricao : '';?> type="text" id="inputDescricao" name="descricao" value="<?= $model->descricao ?>" class="form-control input-md" required>
                            </div>

                            
                            <div class="form-check">
                                <input <?php echo $checkbox?> onclick="$(this).attr('value', this.checked ? 1 : 0)" value=0 name='concluido' type="checkbox" class="form-check-input" id="concluido">
                                <label class="form-check-label" for="concluido">Tarefa Concluida</label>
                            </div>

                            <label for="prioridade">Prioridade</label>
                            <select class="form-control" id="prioridade" name="prioridade">
                                <option value=1>Muito alta</option>
                                <option value=2>Alta</option>
                                <option value=3>Média</option>
                                <option value=4>Baixa</option>
                            </select>
                            <?php echo '<script>$("#prioridade option[value='.$tarefa->prioridade.']").attr("selected", "selected");</script>'?>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class=" control-label" for="submitButton"></label>
                            <button id="submitButton" name="enviar" class="btn btn-primary btn-block">Salvar</button>
                            <button  type="button" onclick="limparCampos()" id="limpar" name="limpar" class="btn btn-inverse btn-block">Limpar</button>
                            <button  type="button" name='voltar' id='voltar' onclick="location.href='./tarefaLista.php'"class="btn btn-inverse btn-block">Voltar</button>
                            
                        </div>
                    </div>
                    
                </div>
            </fieldset>
        </form>
    </div>
</div>