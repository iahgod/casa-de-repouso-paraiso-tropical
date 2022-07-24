<?php
namespace src\handlers;

use \src\models\Ace;

class AceHandler {
    
    public static function new($nav, $idnav, $port){
        Ace::insert([
            'nav'=> $nav,
            'idnav'=> $idnav,
            'port'=>$port,
            'data'=>date()
        ])->execute();
    }
    

}