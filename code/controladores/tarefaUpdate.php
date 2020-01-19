<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

require '../autoload.php';

if(!isset($_POST['nome']) ||!isset($_POST['descricao']) || !isset($_POST['prioridade'])){
    echo "<script>alert('Algum campo não foi informado')</script>";
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$prioridade = $_POST['prioridade'];
$concluida = $_POST['concluida'];

$tarefa = createTarefa($id,$nome,$descricao, $prioridade, $concluida);
$tarefa->id = $id;
$dao = new TarefaDao();


if($dao->update($tarefa)){
    echo "<script>alert('Tarefa editada com sucesso');</script>";
    echo "<script>window.location.replace('tarefaUpdateForm.php?id=$tarefa->id')</script>";
}else{
    echo "<h1>Deu ruim</h1>";
}




function createTarefa($id,$nome,$descricao, $prioridade, $concluida) {
    $tarefa = new Tarefa();
    $tarefa->$id = $id;
    $tarefa->concluida = $concluida ? 1 : 0;
    $tarefa->nome = $nome;
    $tarefa->descricao = $descricao;
    $tarefa->prazo = NULL; // Não trabalharemos com prazo agora
    $tarefa->prioridade = $prioridade;
    return $tarefa;
}