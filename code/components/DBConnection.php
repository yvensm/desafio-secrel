<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author emanuel
 */
class DBConnection {

    /**
     * @return \PDO
     */
    public static function createPDO() {
        return new PDO("mysql:host=localhost;dbname=projetotarefas;charset=utf8", "root", "");
    }
    /**
     * @return \PDO
     */
    public static function createStatement($query) {
        return self::createPDO()->prepare($query);
    }

}
