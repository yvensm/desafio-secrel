<?php
require '../autoload.php';

if(!isset($_POST['nome']) || !isset($_POST['descricao']) || !isset($_POST['prioridade'])){
    echo "<script>alert('Algum campo não foi informado')</script>";
}
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$prioridade = $_POST['prioridade'];

$dao = new TarefaDao();

$tarefa = createTarefa($nome,$descricao,$prioridade);

$lastId = $dao->insert($tarefa);
if ($lastId) {
    // echo "Último ID:  " . $lastId;
    // var_dump($tarefa);
    echo "<script>alert('Tarefa criada com sucesso');</script>";
    echo "<script>window.location.replace('tarefaForm.php')</script>";
    // header("Location: tarefaForm.php");    
} else {
    echo HtmlHelper::tag('h2', 'Erros');
    var_dump($tarefa->erros);
}



function createTarefa($nome, $descricao, $prioridade) {
    $tarefa = new Tarefa();
    $tarefa->concluida = 0;
    $tarefa->nome = $nome;
    $tarefa->descricao = $descricao;
    $tarefa->prazo = NULL; // Não trabalharemos com prazo agora
    $tarefa->prioridade = $prioridade;
    return $tarefa;
}
