<?php

require '../autoload.php';

try {
    $dao = new TarefaDao();
    $tarefas = $dao->findAll();
    //include '../views/template.php';
    $viewname = __DIR__ . '/../views/tarefa/lista.php';
    include __DIR__ . '/../views/layouts/main.php';
 } catch (Exception  $exc) { 
    $error    = $exc->getCode() . '  ' . $exc->getMessage();
    $viewname = __DIR__ . '/../views/layouts/error.php';
    include __DIR__ . '/../views/layouts/main.php';
}


