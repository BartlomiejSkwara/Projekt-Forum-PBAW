<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace app\controllers;
use core\App;
use core\Validator;
use core\SessionUtils;
use core\Utils;
/**
 * Description of Category
 *
 * @author Krisent
 */
class Category {

    private $categoryName;
    private $categoryData;
    private $threads;

    public function __construct() {
        $this->threads = array();
        $this->categoryData = array();
    }

    private function validateCategoryView(){
        $validator = new Validator();
        $this->categoryName = $validator->validateFromCleanURL(1,
            [ 

             'required' => true,
             'required_message' => 'message...',
             'min_length' => 1,
             'max_length' => 45,

             //'regexp' => regular expression,
            'regexp_message' => 'message...',
            'validator_message' => 'message...',
             //'message_type' => error | warning | info,

            ]
        );
        $this->categoryName = urldecode($this->categoryName);
        //Brak podanej kategorii wracaj do home
        if(!$validator->isLastOK())
        {
            //\core\SessionUtils::
            //App::getSmarty()->assign("lol","sadsa");
            //SessionUtils::loadMessages()
            

            ///załaduj do ciasteczek takie dziadostwo z komunikatem

            App::getRouter()->redirectTo("home");
            //App::getSmarty()->assign("customError","serio ");
            //App::getSmarty()->display("Home.tpl");
        }
    
    }
    
    private function getThreadsFromDB(){
        try {
            
            $this->categoryData = App::getDB()->select("category", ["idCategory","name","description"], 
            [
                "idcategory"=>$this->categoryName,
            ]);
            
            if(sizeof($this->categoryData)==0)
                return false;
            
            $this->threads = App::getDB()->select("thread", ["idthread","topic","creation_date","update_date","category_id","message_count","user_id"],
            [
                "category_id"=> $this->categoryName,
            ]);
            
                    
        } 
        catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug){
                    ///ma działać na popupach
                    Utils::addErrorMessage($e->getMessage());
                    return true;
                }
                else {
                    App::getRouter()->redirectTo("fatalError");
                }
        }
        
        
        return true;
    }
            
    public function action_category(){
        $this->validateCategoryView();
                
        if($this->getThreadsFromDB())
        {
            App::getSmarty()->assign("title", $this->categoryData[0]["name"]);
            App::getSmarty()->assign("categoryData", $this->categoryData[0]);
            App::getSmarty()->assign("threads", $this->threads);
            App::getSmarty()->display("CategoryView.tpl");
        
        }
        else{
            App::getSmarty()->assign("customError", "Nie odnaleziono kategorii<br><p class='text-primary'>".$this->categoryName."</p>");
            App::getSmarty()->display("FatalError.tpl");
        }
    }
    
}
