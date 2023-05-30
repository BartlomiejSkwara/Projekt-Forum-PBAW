<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace app\controllers;

use core\App;
//use app\forms\CategoryEditForm;
use core\Validator;
/**
 * Description of CategoryCUD
 *
 * @author Krisent
 */
class CategoryCUD {
    
    
    private $editForm;
    
    public function __construct() {
        $this->editForm = new \app\forms\CategoryEditForm();
    }
    
    
    
    public function action_addCategoryView(){
    //App::getSmarty()->assign("header","Dodaj Kategorię");
        App::getSmarty()->assign("title","Dodaj Kategorię");
        App::getSmarty()->display("CategoryCU.tpl");
        
        
    }
    
    private function validateCategoryCU(){
        $validator = new Validator();
        
        $this->editForm->name = $validator ->validateFromPost(
            "categoryName",
            [ 
            'trim' => true, 
            'required' => true , 
            'required_message' => 'Nie wypełniono pola "Nazwa Kategorii"', 
            'min_length' => 1,
            'max_length' => 45, 
            'validator_message' => 'Wartość podana w polu "Nazwa Kategorii" jest nieprawidłowa', 
            ]         
        );

        $this->editForm->description = $validator ->validateFromPost(
            "categoryDescription",
            [ 
            'trim' => true,
            'required' => true,
            'required_message' => 'Nie wypełniono pola "Opis Kategorii"',
            'max_length' => 90, 
            'validator_message' => 'Wartość podana w polu "Opis Kategorii" jest nieprawidłowa', 
            ]         
        );
        
        return App::getMessages()->getSize()<1;
        
    }
    public function action_addCategory(){
        
        if($this->validateCategoryCU()){
            try{
                App::getDB()->insert("category",
                    [
                    "idcategory"=> str_replace(" ","-",strtolower($this->editForm->name)),
                    "name" => $this->editForm->name,
                    "description" => $this->editForm->description,
                    ]
                );
            } catch (\PDOException $e) {
                
                if (App::getConf()->debug){
                    Utils::addErrorMessage($e->getMessage());
                    return false;
                }
                else
                    App::getRouter()->redirectTo("fatalError");
            }
           
            App::getRouter()->redirectTo("home");
        }
        
        App::getSmarty()->assign("lastValues",$this->editForm);
        App::getSmarty()->assign("title","Dodaj Kategorię");
        App::getSmarty()->display("CategoryCU.tpl");
    }
    
    public function action_deleteCategory(){
        
    }
}
