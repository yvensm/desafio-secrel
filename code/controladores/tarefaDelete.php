<?php

if (!isset($_GET['id'])) {
    die('Parametro id obrigatorio. Exemplo: ?id=5');
}
require '../autoload.php';

$dao = new TarefaDao();
$id = $_GET['id'];
$stats = $dao->delete($id);
if($stats === TRUE){
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header('Location: '.$uri.'/tarefaLista.php');
    exit;
}else{
    echo $stats;
}


