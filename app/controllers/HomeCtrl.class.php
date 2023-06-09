<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace app\controllers;

use core\App;
use core\Utils;
use core\SessionUtils;

/**
 * Description of CategoriesCtrl
 *
 * @author Krisent
 */
class HomeCtrl {
    //put your code here
    
    public $categories;
    
    public function __construct() {
        $this->categories = array();
    }
    private function getDataFromDB(){
        try {
            $this->categories = App::getDB()->select("category", ["idcategory","name","description"]);
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
        SessionUtils::loadMessages();

        App::getSmarty()->assign("categories", $this->categories);
        App::getSmarty()->display("Home.tpl");
        

    }
}
