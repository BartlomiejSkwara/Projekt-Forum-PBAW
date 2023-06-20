<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace app\controllers;

use core\App;
//use app\forms\CategoryEditForm;
use core\Validator;
use core\Utils;
use core\SessionUtils;
/**
 * Description of CategoryCUD
 *
 * @author Krisent
 */
class CategoryCD {
    
    
    private $editForm;
    
    public function __construct() {
        $this->editForm = new \app\forms\CategoryEditForm();
    }
    
    
    public function action_addCategoryView(){
        App::getSmarty()->assign("title","Dodaj Kategorię");
        App::getSmarty()->assign("selectedAction","addCategory");
        App::getSmarty()->display("CategoryCU.tpl");      
    }
    
    private function validateCategoryCreate(){
        $validator = new Validator();
        
        $this->editForm->name = $validator ->validateFromPost(
            "categoryName",
            [ 
            'trim' => true, 
            'required' => true , 
            'required_message' => 'Nie wypełniono pola "Nazwa Kategorii"', 
            'min_length' => 1,
            'max_length' => 45, 
            'validator_message' => 'Wartość podana w polu "Nazwa Kategorii" jest nieprawidłowa sprawdź czy nie użyłeś jednego z tych znaków: " \' & < > ',
            'regexp' => '/^(?!.*["\'<>\x5C\x2F]|.*&#(?:34|38|39|60|62);).*$/',
            'regexp_message' => 'Wartość w polu "Nazwa Kategorii" zawiera jeden z zakazanych znaków: " \' & < > \ /',
 
            ]         
        );

        $this->editForm->description = $validator ->validateFromPost(
            "categoryDescription",
            [ 
            'trim' => true,
            'required' => true,
            'required_message' => 'Nie wypełniono pola "Opis Kategorii"',
            'max_length' => 90, 
            'validator_message' => 'Wartość podana w polu "Opis Kategorii" jest nieprawidłowa sprawdź czy nie użyłeś jednego z tych znaków: " \' & < > ',
            'regexp' => '/^(?!.*["\'<>]|.*&#(?:34|38|39|60|62);).*$/',
            'regexp_message' => 'Wartość w polu "Opis Kategorii" zawiera jeden z zakazanych znaków: " \' & < > ',
            ]         
        );
        


        return App::getMessages()->getSize()<1;
        
    }
    public function action_addCategory(){
        
        if($this->validateCategoryCreate()){
            try{
                $this->editForm->categoryId = str_replace(" ","-",strtolower($this->editForm->name));
                
                App::getDB()->insert("category",
                    [
                    "idcategory"=> $this->editForm->categoryId,
                    "name" => $this->editForm->name,
                    "description" => $this->editForm->description,
                    ]
                );
                
                App::getMessages()->clear();
                Utils::addInfoMessage("Dodanie kategorii zakończona sukcesem :>");
                SessionUtils::storeMessages();
                
                App::getRouter()->redirectTo("home");
            } catch (\PDOException $e) {
                
                if($e->getCode()==23000){
                    Utils::addErrorMessage("Kategoria o podanej nazwie już istnieje");
                }
                else if (App::getConf()->debug){
                    Utils::addErrorMessage($e->getMessage());

                }
                else
                    App::getRouter()->redirectTo("fatalError");
            }
           
           
        }
        
        App::getSmarty()->assign("lastValues",$this->editForm);
        App::getSmarty()->assign("title","Dodaj Kategorię");
        App::getSmarty()->assign("selectedAction","addCategory");

        App::getSmarty()->display("CategoryCU.tpl");
    }
    
    private function validateDeleteCategory(){
        $validator = new Validator();
        $this->editForm->categoryId = $validator->validateFromCleanURL(1,
            [ 
            'required' => true , 
            'min_length' => 1,
            'validator_message' => 'Wartość podana w adresie jest nieprawidłowa', 
            ]  
        );
        
        $this->editForm->categoryId = urldecode($this->editForm->categoryId);
        
        return App::getMessages()->getSize()<1;
    }
    public function action_deleteCategory(){
        if($this->validateDeleteCategory()){
            try{
                
                App::getDB()->delete("category",  
                    [
                        "idcategory" => $this->editForm->categoryId,
                    ]
                );
                
                App::getMessages()->clear();
                Utils::addInfoMessage("Usunięcie kategorii zakończone sukcesem :>");
                SessionUtils::storeMessages();
                
                App::getRouter()->redirectTo("home");
            } catch (\PDOException $e) {
                
                if (App::getConf()->debug){
                    Utils::addErrorMessage($e->getMessage());
                    return false;
                }
                else
                    App::getRouter()->redirectTo("fatalError");
            }
            
            
        }        
        App::getRouter()->redirectTo("home");
    }
    
    
    
}
