<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace app\controllers;

use core\App;
use core\Utils;

/**
 * Description of CategoriesCtrl
 *
 * @author Krisent
 */
class CategoriesCtrl {
    //put your code here
    public function action_categories(){
        App::getSmarty()->display("Categories.tpl");
        

    }
}
