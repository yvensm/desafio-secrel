<?php

if (!isset($_GET['id'])) {
    die('Parametro id obrigatorio. Exemplo: ?id=5');
}

require '../autoload.php';
$dao = new TarefaDao();
$id = $_GET['id'];
$tarefa = $dao->find($id);
$viewname = __DIR__ . '/../views/tarefa/view.php';
include __DIR__ . '/../views/layouts/main.php';
