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
use app\forms\FilterParamsForm;
use app\forms\PaginationData;

/**
 * Description of Thread
 *
 * @author Krisent
 */
class Thread {
    private $threadName;
    private $threadData;
    private $threadMessages;
    private $validator;
    private $paginationData;
    private $categoryID;
    private $resultsOnPage;


    public function __construct() {
        $this->threadMessages = array();
        $this->threadData = array();
        $this->validator = new Validator();
        $this->paginationData = new PaginationData();
        $this->resultsOnPage = 10;
    }

    private function validateThreadView(){
        $this->threadName = $this->validator->validateFromCleanURL(1,
            [ 

             'required' => true,
             'required_message' => 'message...',
             'number' => true,
            ]
        );
        if(!$this->validator->isLastOK())
        {
            App::getRouter()->redirectTo("home");
        }
        $this->threadName = urldecode($this->threadName);

        $this->paginationData->currentPage = $this->validator->validateFromPost("page",
            [ 
            'int' => true,
            'min' => 0
            ]
        );
        if(!$this->validator->isLastSet()||!$this->validator->isLastOK())
            $this->paginationData->currentPage=0;
        

        
    }
    
  

    private function getMessagesFromDB(){
        try {
            
            $this->threadData = App::getDB()->select("thread", ["idthread ","topic","creation_date", "update_date", "message_count"], 
            [
                "idthread"=>$this->threadName,
            ]);
            
            if(sizeof($this->threadData)==0)
                return false;
            
             $this->paginationData->setTotalResultsCount($this->threadData[0]["message_count"], $this->resultsOnPage);;
            
            $this->threadMessages = App::getDB()->select("message", 
                    ["[>]user"=>["user_id"=>"iduser"]],
                    [
                        "idmessage",
                        "creation_date",
                        "content",
                        "username"
                    ],
            [
                "ORDER" => [
                    "creation_date" => "DESC"
                    
                ],
                "thread_id "=> $this->threadName,
                "LIMIT"=>[0+$this->paginationData->currentPage* $this->resultsOnPage, $this->resultsOnPage]
                
            ]);
            

        } 
        catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug){
                    
                    Utils::addErrorMessage($e->getMessage());
                    $this->threadData[0]["topic"]="notFound";
                    $this->threadMessages = [];
                    
                    return true;
                }
                else {
                    App::getRouter()->redirectTo("fatalError");
                }
        }
        

        return true;
    }
   
    public function action_thread(){
        $this->sharedActionCode("ThreadView.tpl");
    }
    
    public function action_messageList(){
         if($this->sharedActionCode("components/threadMessagesList.tpl")){
             App::getSmarty()->display("components/paginationCategory.tpl");
         }
    
     }
    

    
    
    
    

    private function sharedActionCode($tpl){

        $this->validateThreadView();
        if($this->getMessagesFromDB())
        {
            App::getSmarty()->assign("pagData", $this->paginationData);    
            
            App::getSmarty()->assign("title", $this->threadData[0]["topic"]);
            App::getSmarty()->assign("threadData", $this->threadData[0]);
            App::getSmarty()->assign("threadMessages", $this->threadMessages);
            App::getSmarty()->display("components/messages.tpl");

            App::getSmarty()->display($tpl);
            return true;
        }
        else{
            App::getSmarty()->assign("customError", "Nie odnaleziono kategorii<br><p class='text-primary'>".$this->threadName."</p>");
            App::getSmarty()->display("FatalError.tpl");
            return false;
        }
        

    }
    
    
    
    
    
    
    
    
    
        

    
    


    private function validateDeleteThread(){
        $validator = new Validator();
        $this->categoryID = $validator->validateFromCleanURL(2,
            [ 
            'required' => true , 
            'numeric' => true,  
            'validator_message' => 'Wartość podana w adresie jest nieprawidłowa', 
            ]  
        );
        
        
        return App::getMessages()->getSize()<1;
    }
    public function action_deleteThread(){
        if($this->validateDeleteThread()){
            try{
                
                App::getDB()->delete("thread",  
                    [
                        "idthread " => $this->categoryID,
                    ]
                );
                
                
                $this->sharedActionCode("CategoryView.tpl");
                return;
                

            } catch (\PDOException $e) {
                
                if (App::getConf()->debug){
                    Utils::addErrorMessage($e->getMessage());
                    return false;
                }
                else
                    $this->sharedActionCode("CategoryView.tpl");
            }
            
            
        }        
        $this->sharedActionCode("CategoryView.tpl");
    }
    
}
