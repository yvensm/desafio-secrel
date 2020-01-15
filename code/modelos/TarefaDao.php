<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TarefaDao
 * @author emanuel
 */
class TarefaDao {

    /**
     * @param integer $id
     * @return Tarefa
     */
    public function find($id) {
        // Query incorreta
        $query = "SELECT id as chave, id, nome, descricao, prazo, prioridade, concluida "
                . "FROM tarefas where id = $id "; 
        $statement = DBConnection::createStatement($query);
        $statement->bindValue(':id', $id);
        $statement->setFetchMode(PDO::FETCH_CLASS, 'Tarefa');
        $statement->execute();
        return $statement->fetch();
    }

//    
    public function findAll() {
        $query = "SELECT id as chave, id, nome, descricao, prazo, prioridade, concluida "
                . "FROM tarefas";
        $statement = DBConnection::createStatement($query);
        $statement->execute();
        $tarefas = $statement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_UNIQUE, 'Tarefa');
        return $tarefas;
    }

    public function insert(Tarefa $tarefa) {
        $query = "INSERT INTO tarefas (nome, descricao, prazo, prioridade, concluida) values(:nome, :descricao, :prazo, :prioridade, :concluida) ";
        $pdo = DBConnection::createPDO();
        $statement = $pdo->prepare($query);
        $statement->bindValue(':nome', $tarefa->nome);
        $statement->bindValue(':descricao', $tarefa->descricao);
        $statement->bindValue(':prazo', $tarefa->prazo);
        $statement->bindValue(':prioridade', $tarefa->prioridade);
        $statement->bindValue(':concluida', $tarefa->concluida);
        if ($statement->execute()) {
            return $pdo->lastInsertId();
        }
        $tarefa->addErro(implode(',', $statement->errorInfo()));
        return NULL;
    }

    public function delete($id){
        $query = "DELETE FROM tarefas WHERE id = $id";
        $pdo = DBConnection::createPDO();
        $statement=$pdo->prepare($query);
        if($statement->execute()){
            return TRUE;
        }
        return implode(',', $statement->errorInfo());
    }

}
