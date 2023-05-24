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
class HomeCtrl {
    //put your code here
    
    public $categories;
    
    private function getDataFromDB(){
        try {
            $categories = App::getDB()->select("category", ["name","description"]);
        } 
        catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug){
                    Utils::addErrorMessage($e->getMessage());
                }
                else {
                    App::getRouter()->redirectTo("fatalError");
                }
        }
        
    }
    public function action_home(){
        $this->getDataFromDB();
        App::getSmarty()->display("Home.tpl");
        

    }
}
