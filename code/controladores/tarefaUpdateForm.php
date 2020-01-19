<?php

require '../autoload.php';

if (!isset($_GET['id'])) {
    die('Parametro id obrigatorio. Exemplo: ?id=5');
}
require '../autoload.php';

$dao = new TarefaDao();
$id = $_GET['id'];
$tarefa = $dao->find($id);
$type = "Update";

$viewname = __DIR__ . '/../views/tarefa/form.php';
include __DIR__ . '/../views/layouts/main.php';