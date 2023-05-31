<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace app\controllers;
use core\Validator;
use app\forms\CategoryEditForm;
use core\App;
/**
 * Description of CategoryUpdate
 *
 * @author Krisent
 */
class CategoryUpdate {
    
    
    private $editForm;
    private $record;
    private $urlID;
  
    
    public function __construct() {
        $this->editForm = new \app\forms\CategoryEditForm();
        $this->record = array();
    }
    
    
    private function validateEditCategoryView(){
        $validator = new Validator();
        $this->editForm->categoryId =$validator->validateFromCleanURL(1,
            [ 
            'required' => true , 
            'min_length' => 1,
            'max_length' => 45, 
            'validator_message' => 'Wartość podana w adresie jest nieprawidłowa', 
            ]  
        );
        
        if($validator->isLastOK()==false)
            return false;

        $this->urlID = urldecode($this->editForm->categoryId);

        try {
            $this->record = App::getDB()->select("category", ["idCategory","name","description"], 
            [
                "idcategory"=>$this->urlID,
            ]);

        } catch (\PDOException $e) {

                if (App::getConf()->debug){
                    Utils::addErrorMessage($e->getMessage());
                    return true;
                }
                else{
                    App::getRouter()->redirectTo("fatalError");
                }
        }
        
        
        if(sizeof($this->record)==0){
            return false;
        }
        
        return true;
    }


    public function action_editCategoryView(){
        
        if($this->validateEditCategoryView()){
            App::getSmarty()->assign("category", $this->record[0]);
            App::getSmarty()->assign("title","Edytujesz Kategorię<br>");
            App::getSmarty()->assign("selectedAction","editCategory");
            App::getSmarty()->assign("editedID", $this->urlID);

            App::getSmarty()->display("CategoryCU.tpl");
        }
        else
            App::getRouter()->redirectTo("home");
    
    }
    
    
    public function validateEditCategory(){
        $validator = new Validator();
        $this->urlID = $validator->validateFromCleanURL(1,
            [ 
            'required' => true , 
            'min_length' => 1,
            'max_length' => 45, 
            'validator_message' => 'Wartość podana w adresie jest nieprawidłowa', 
            ]  
        );
        
        $this->urlID = urldecode($this->editForm->categoryId);

        
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
    
    public function action_editCategory() {
        if($this->validateEditCategory()){
            try{
                $this->editForm->categoryId = str_replace(" ","-",strtolower($this->editForm->name));
                
                App::getDB()->replace("category",
                    [
                    "idcategory"=> $this->editForm->categoryId,
                    "name" => $this->editForm->name,
                    "description" => $this->editForm->description,
                    ],
                        
                    [
                        "idcategory"=> $this->urlID,
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
        
        App::getSmarty()->assign("category", $this->record[0]);
        App::getSmarty()->assign("title","Edytujesz Kategorię<br>");
        App::getSmarty()->assign("editedID", $this->urlID);

        App::getSmarty()->assign("selectedAction","editCategory");

        App::getSmarty()->display("CategoryCU.tpl");
    }
}
