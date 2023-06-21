<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace app\forms;

/**
 * Description of PaginationData
 *
 * @author Krisent
 */
class PaginationData {
    
    public $currentPage;
    public $lastPage;
    private $totalResultsCount;
    public $filter;
    
    public function __construct() {
        $this->buttonsContent=array();
        $this->boolGoStart = true;
        $this->boolGoEnd   = true;
        $this->totalResultsCount = 0;
    }
    
    public function setTotalResultsCount($count,$maxOnPage){
        $this->totalResultsCount = $count;
        $this->lastPage = ceil($count/$maxOnPage)-1;
        if($this->lastPage<0)
            $this->lastPage=0;
        

        
    }
    
   public function getTotalResultsCount() {
       return $this->totalResultsCount;
   }
}
