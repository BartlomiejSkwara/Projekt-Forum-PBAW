<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\LoginForm;
use core\Validator;
use \core\RoleUtils;
use \core\SessionUtils;
class LoginCtrl {
    
    private $form;
    public function __construct() {
        $this->form = new LoginForm();
    }

    
    
    private function validateLoginParams() {
        $validator = new Validator();
        
        $bothParamsAreOk = true;
        $this->form->login = $validator->validateFromPost(
            "loginInput",
            [
                'required' => true ,
                'required_message' => 'Nie podałeś loginu :<', 
                'max_length' => 20,
                'validator_message' => 'Podana wartość nie może być loginem',
                //'message_type' => error
            ]
        );
        if(!$validator->isLastOK())
            $bothParamsAreOk = false;

        $this->form->password = $validator->validateFromPost(
            "passwordInput",
            [
                'required' => true ,
                'required_message' => 'Nie podałeś hasła :<', 
                'max_length' => 45,
                'validator_message' => 'Podana wartość nie może być hasłem',
                //'message_type' => error
            ]
        );
        if(!$validator->isLastOK())
            $bothParamsAreOk = false;
        
        
        if($bothParamsAreOk){
            $record = App::getDB()->select("user",["username","password","role"],
            [
                "AND"=>[
                    "username"=> $this->form->login,
                    "password"=> $this->form->password
                ]
            ]
            );
            if($record!=null){
            RoleUtils::addRole("user");
            
            SessionUtils::store("username", $record[0]["username"]);
            if ($record[0]["role"] == "admin"){
                RoleUtils::addRole("admin");
            }
            return true;
            
            }
            else{
                Utils::addErrorMessage("Niepoprawne hasło albo login :<");
                return false;
            }
        }
            
        
        
        
        
    }


    public function action_loginValidate() {

        if($this->validateLoginParams()){
            App::getRouter()->redirectTo("categories");
        }
        else{
            App::getSmarty()->assign("title","Login"); 
            App::getSmarty()->display("Login.tpl");
        }

        
    }
    
    public function action_login(){
        App::getSmarty()->assign("title","Login"); 
        App::getSmarty()->display("Login.tpl");
    }
    
    public function action_logout(){
        session_destroy();

        App::getRouter()->redirectTo("categories");
    }
    
    
    
}
