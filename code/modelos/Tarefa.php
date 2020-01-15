<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tarefa
 *
 * @author emanuel
 */
class Tarefa {

    public $id;
    public $nome;
    public $descricao;
    public $prazo;
    public $prioridade;
    public $concluida;
   
    
    private $erros = []; 

    public function addErro($msg) {
        $this->erros[] = $msg;
    }
    public function getErros() {
        return $this->erros;
    }

    public function getPrazoText() {
        return DtHelper::text($this->prazo);
    }

}
