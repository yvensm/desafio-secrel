<?php /* @var $tarefa Tarefa */ ?>
<h4>Tarefa (nome): '<?= $tarefa->nome ?>'</h4>

<div class="row">

    <div class="col-md-6">

        <table class="table table-striped">
            <tr>
                <th>id</th>
                <td><?= $tarefa->id ?></td>
            </tr>

            <tr>
                <th>Prioridade</th>
                <td><?php
                    $prioridade = $tarefa->prioriade ?? " - ";
                    $class = $prioridade <= 1 ? 'text-danger' : 'text-default';
                    echo HtmlHelper::tag('p', $prioridade, "class='$class'");
                    ?></td>
            </tr>
            <tr>
                <th>Prazo</th>
                <td><?= $tarefa->getPrazoText() ?></td>
            </tr>
            <tr>
                <th>Concluída</th>
                <td><?php
                    if ($tarefa->concluida):
                        echo HtmlHelper::tag('span', "<i class='glyphicon glyphicon-ok'></i> Concluída", "class='text-success'");
                    else:
                        echo HtmlHelper::tag('span', "<i class='glyphicon glyphicon-ban-circle'></i> Não concluída", "class='text-danger'");
                    endif;
                    ?></td>
            </tr>
            <tr>
                <th>Descrição</th>
                <td> !)(*&)(*) </td>
            </tr>
        </table>
        <div class="pull-right">
            <a href="./TarefaLista.php">Voltar</a> | 
            <a href="./TarefaUpdate.php?id=<?= $tarefa->id ?>">Editar</a>
        </div>
    </div>
</div>
