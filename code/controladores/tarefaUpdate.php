<?php

if (!isset($_GET['id'])) {
    die('Parametro id obrigatorio. Exemplo: ?id=5');
}
require '../autoload.php';
$dao = new TarefaDao();
$id = $_GET['id'];
$tarefa = $dao->find($id);

echo HtmlHelper::tag('h1', 'Antes da Atualização');
var_dump($tarefa);

$tarefa->descricao = "Atualizado em " . date('d/M/Y H:i:s');

$rows = $dao->update($tarefa);
if ($rows > 0) {
    echo "linhas afetadas: $rows";
    echo HtmlHelper::tag('h1', 'Após Atualização');
    $tarefa = $dao->find($id);
    var_dump($tarefa);
} else {
    echo HtmlHelper::tag('h2', 'Erros');
    var_dump($tarefa->erros);
}






