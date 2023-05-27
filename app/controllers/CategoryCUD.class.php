<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace app\controllers;

use core\App;
/**
 * Description of CategoryCUD
 *
 * @author Krisent
 */
class CategoryCUD {
    //put your code here
    public function action_addCategoryView(){
    //App::getSmarty()->assign("header","Dodaj Kategorię");
        App::getSmarty()->assign("title","Dodaj Kategorię");
        App::getSmarty()->display("CategoryCU.tpl");
        
        
    }
    public function action_addCategory(){
        
        App::getSmarty()->assign("title","Dodaj Kategorię");
        App::getSmarty()->display();
    }
}
