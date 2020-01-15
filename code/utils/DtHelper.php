<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DtHelper
 *
 * @author emanu
 */
class DtHelper {
    public static $dtformat = 'd/m/Y';
    public static $dtTimeformat = 'd/m/Y H;i:s';
    
    public static function text($dateString) {
        $date = new DateTime($dateString);
        return $date->format(self::$dtformat);
    }
    public static function textdttime($dateString) {
        $date = new DateTime($dateString);
        return $date->format(self::$dtTimeformat);
    }
}
