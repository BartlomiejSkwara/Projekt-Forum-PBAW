<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace app\controllers;
use \core\App;

/**
 * Description of FatalError
 *
 * @author Krisent
 */
class FatalError {
    public function action_fatalError () {
        
        App::getSmarty()->display("FatalError.tpl");
    }
    //put your code here
}
