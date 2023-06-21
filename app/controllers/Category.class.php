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
 * Description of Category
 *
 * @author Krisent
 */
class Category {

    private $categoryName;
    private $categoryData;
    private $threads;
    private $validator;
    private $filterForm;
    private $paginationData;
    
    private $resultsOnPage;


    public function __construct() {
        $this->threads = array();
        $this->categoryData = array();
        $this->filterForm = new FilterParamsForm();
        $this->validator = new Validator();
        $this->paginationData = new PaginationData();
        $this->resultsOnPage = 10;
    }

    private function validateCategoryView(){
        $this->categoryName = $this->validator->validateFromCleanURL(1,
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
        if(!$this->validator->isLastOK())
        {
            App::getRouter()->redirectTo("home");
        }
        $this->categoryName = urldecode($this->categoryName);

        $this->paginationData->currentPage = $this->validator->validateFromPost("page",
            [ 
            'int' => true,
            'min' => 0
            ]
        );
        if(!$this->validator->isLastSet()||!$this->validator->isLastOK())
            $this->paginationData->currentPage=0;
        

        
    }
    
  

    private function getThreadsFromDB(){
        try {
            
            $this->categoryData = App::getDB()->select("category", ["idCategory","name","description"], 
            [
                "idcategory"=>$this->categoryName,
            ]);
            
            if(sizeof($this->categoryData)==0)
                return false;
            
             $this->paginationData->setTotalResultsCount(App::getDB()->count("thread", 
            [
                "topic[~]" => $this->filterForm->filter,
                "category_id"=> $this->categoryName,                
            ])
            , $this->resultsOnPage);
            
            $this->threads = App::getDB()->select("thread", 
                    ["[>]user"=>["user_id"=>"iduser"]],
                    [
                        "idthread",
                        "topic",
                        "creation_date",
                        "update_date",
                        "category_id",
                        "message_count",
                        "username"
                    ],
            [
                "ORDER" => [
                    $this->filterForm->column => $this->filterForm->direction
                    
                ],
                "topic[~]" => $this->filterForm->filter,
                "category_id"=> $this->categoryName,
                "LIMIT"=>[0+$this->paginationData->currentPage* $this->resultsOnPage, $this->resultsOnPage]
                
            ]);
            

        } 
        catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug){
                    
                    Utils::addErrorMessage($e->getMessage());
                    $this->categoryData[0]["name"]="notFound";
                    $this->categoryData[0]["description"]="notFound";
                    $this->threads = [];
                    
                    return true;
                }
                else {
                    App::getRouter()->redirectTo("fatalError");
                }
        }
        

        return true;
    }
    private function validateFilterParams(){
                
        
         
        $this->filterForm->column = $this->validator->validateFromPost("sortBy",
            [ 
                'regexp' => '/^(update_date|creation_date|message_count|topic)$/',
            ]
        );
        if(!$this->validator->isLastSet()||!$this->validator->isLastOK())
        {
            $this->filterForm->column = "update_date";
        }
        
        $this->filterForm->direction = $this->validator->validateFromPost("sortDirection",
            [ 
                'regexp' => '/^(ASC|DESC)$/',
            ]
        );
        if(!$this->validator->isLastSet()||!$this->validator->isLastOK())
        {
            $this->filterForm->direction = "DESC";
        }
        
        $this->filterForm->filter = $this->validator->validateFromPost("filter",
            [ 

                'max_length' => 45,
                'regexp' => App::getConf()->illegalSymbolsRegex,
                'regexp_message' => 'Filtr nie może zawierać znaków specjalnych " \' & < > ',
                
            ]
        );
        if(!$this->validator->isLastOK())
        {
            $this->filterForm->filter = "";
        }
        
        


    }        
    public function action_category(){
        $this->sharedActionCode("CategoryView.tpl");
    }
    
    public function action_categoryFilterThreadList(){
         if($this->sharedActionCode("components/threadlist.tpl")){
             App::getSmarty()->display("components/paginationCategory.tpl");
         }
    
    }
    
    private function sharedActionCode($tpl){
        ///App::getMessages()->clear();

        $this->validateCategoryView();
        $this->validateFilterParams();
        if($this->getThreadsFromDB())
        {
            $this->paginationData->filter = $this->filterForm;
            App::getSmarty()->assign("pagData", $this->paginationData);    
            
            App::getSmarty()->assign("title", $this->categoryData[0]["name"]);
            App::getSmarty()->assign("categoryData", $this->categoryData[0]);
            App::getSmarty()->assign("threads", $this->threads);
            App::getSmarty()->display("components/messages.tpl");

            App::getSmarty()->display($tpl);
            return true;
        }
        else{
            App::getSmarty()->assign("customError", "Nie odnaleziono kategorii<br><p class='text-primary'>".$this->categoryName."</p>");
            App::getSmarty()->display("FatalError.tpl");
            return false;
        }
        

    }
    
    
    
    
    
    
    
    
    
}