<?php

require '../autoload.php';
$dao = new TarefaDao();

$tarefa = createRandomTarefa();
$lastId = $dao->insert($tarefa);
if ($lastId) {
    echo "Último ID:  " . $lastId;
    var_dump($tarefa);
} else {
    echo HtmlHelper::tag('h2', 'Erros');
    var_dump($tarefa->erros);
}

function createRandomTarefa() {
    $tarefa = new Tarefa();
    $tarefa->concluida = 0;
    $tarefa->nome = "Teste " . rand(1, 10000000);
    $tarefa->descricao = 'Lorem ipsum ';
    $tarefa->prazo = NULL; // Não trabalharemos com prazo agora
    $tarefa->prioriade = rand(1, 5);
    return $tarefa;
}
