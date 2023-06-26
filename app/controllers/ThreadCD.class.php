<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace app\controllers;

use core\App;
use core\Validator;
use core\Utils;
/**
 * Description of ThreadCD
 *
 * @author Krisent
 */
class ThreadCD {
    
    private $topic;
    private $message;
    private $categoryID;
    private $threadID;
    
    public function validateThreadView(){
        $validator = new Validator();
        

        
        $this->categoryID = $validator->validateFromCleanURL(1,
            [ 
             'trim' => true, 

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
        
        if(!$validator->isLastOK())
        {
            App::getSmarty()->assign("customError", "Błędna kategoria<br><p class='text-primary'>".$this->categoryID."</p>");
            App::getSmarty()->display("FatalError.tpl");
        }
        $this->categoryID  = urldecode($this->categoryID);
        
    }


    public function action_addThreadView()
    {
        $this->validateThreadView();
        App::getSmarty()->assign("categoryID", $this->categoryID);
        App::getSmarty()->assign("title","Dodaj Wątek");
        App::getSmarty()->display("ThreadCreator.tpl");
        
        
        
        
    }
 
    
    public function validateThreadCreation(){
        $validator = new Validator();
        

        
        $this->categoryID = $validator->validateFromCleanURL(1,
            [ 
             'trim' => true, 

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
        
        if(!$validator->isLastOK())
        {
            App::getSmarty()->assign("customError", "Błędna kategoria<br><p class='text-primary'>".$this->categoryID."</p>");
            App::getSmarty()->display("FatalError.tpl");
        }
        $this->categoryID  = urldecode($this->categoryID);
        

        
        

        
        $this->message = $validator ->validateFromPost(
            "message",
            [ 
            'trim' => true, 
            'required' => true , 
            'required_message' => 'Nie wypełniono pola "Wiadomość"', 
            'min_length' => 1,
            'max_length' => 180, 
            'validator_message' => 'Wartość podana w polu "Wiadomość" jest nieprawidłowa sprawdź czy nie użyłeś jednego z tych znaków: " \' & < > ',
            'regexp' => App::getConf()->illegalSymbolsRegex,
            'regexp_message' => 'Wartość w polu "Nazwa Kategorii" zawiera jeden z zakazanych znaków: " \' & < > \ /',
 
            ]         
        );

        $this->topic = $validator->validateFromPost(
            "threadName",
            [ 
            'trim' => true,
            'required' => true,
            'required_message' => 'Nie wypełniono pola "Nazwa wątku"',
            'min_length' => 1,
            'max_length' => 45, 
            'validator_message' => 'Wartość podana w polu "Nazwa wątku" jest nieprawidłowa sprawdź czy nie użyłeś jednego z tych znaków: " \' & < > ',
            'regexp' => App::getConf()->illegalSymbolsRegex,
            'regexp_message' => 'Wartość w polu "Opis Kategorii" zawiera jeden z zakazanych znaków: " \' & < > ',
            ]         
        );
        


        return App::getMessages()->getSize()<1;
    }
    
    public function action_addThread()
    {
        if($this->validateThreadCreation()){
            try{
//                App::getSmarty()->assign("customError", "Nie odnaleziono kategorii<br><p class='text-primary'>".$this->categoryName."</p>");
//                App::getSmarty()->display("FatalError.tpl"); 25
                $date = date("Y-m-d H:i:s");
                App::getDB()->insert("thread",
                    [
                    "topic"=> $this->topic,
                    "creation_date" => $date,
                    "update_date" => $date,
                    "category_id"=> $this->categoryID,
                    "user_id"=> \core\SessionUtils::load("userID",true),
                    "message_count"=> 1
                    ]
                );
                $this->threadID = App::getDB()->select("thread",["idthread"],
                    [
                    "topic"=>$this->topic,
                    "creation_date" => $date,
                    "update_date" => $date,
                    "category_id"=> $this->categoryID,
                    "user_id"=> \core\SessionUtils::load("userID",true)
                    ]
                )[0]["idthread"];
                
                App::getDB()->insert("message",
                    [
                    "content"=> $this->message,
                    "thread_id" => $this->threadID,
                    "user_id"  => \core\SessionUtils::load("userID",true),
                    "creation_date" => $date
                    ]
                );
                
                
                Utils::addInfoMessage("Stworzenie wątku zakończone sukcesem");
                SessionUtils::storeMessages();
                
                //App::getRouter()->redirectTo("home");
            } catch (\PDOException $e) {

                if (App::getConf()->debug){
                    Utils::addErrorMessage($e->getMessage());

                }
                else
                    App::getRouter()->redirectTo("fatalError");
            }
            App::getRouter()->redirectTo("thread/". $this->threadID);
        }else{
            App::getSmarty()->display("components/messages.tpl");
        }
    }
}
