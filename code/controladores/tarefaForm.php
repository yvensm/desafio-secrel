<?php

require '../autoload.php';


$dao = new TarefaDao();
$type = "Form";
$viewname = __DIR__ . '/../views/tarefa/form.php';
include __DIR__ . '/../views/layouts/main.php';