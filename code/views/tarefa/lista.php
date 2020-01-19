<h2>Minhas Tarefas</h2>
<a  class='pull-right' href='./tarefaForm.php'>Nova Tarefa</a></br>

<div class="row">
    <div class="col-md-12">
        <?php
            echo HtmlHelper::table($tarefas, "tabelaTarefas", "tarefa", "id");
        ?>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#tabelaTarefas').DataTable({"language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
            }});
    });

</script>
