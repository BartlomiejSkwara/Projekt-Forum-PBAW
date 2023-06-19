<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace app\controllers;

/**
 * Description of RegisterCtrl
 *
 * @author Krisent
 */
use core\App;
use core\Message;
use core\Utils;
use app\forms\RegisterForm;
use core\Validator;
use \core\RoleUtils;
use \core\SessionUtils;

class RegisterCtrl {
     private $form;
    public function __construct() {
        $this->form = new RegisterForm();
    }

    
    
    private function validateRegisterParams() {
        $validator = new Validator();
        
        $bothParamsAreOk = true;
        $this->form->login = $validator->validateFromPost(
            "loginInput",
            [
                'trim' => true,
                'required' => true ,
                'required_message' => 'Nie podałeś loginu :<', 
                'min_length' => 5,
                'max_length' => 20,
                'validator_message' => 'Podana wartość nie może być loginem, upewnij się że login ma przynajmniej 5 znaków',
                'regexp' => '/^(?!.*["\'<>]|.*&#(?:34|38|39|60|62);).*$/',
                
                'regexp_message' => 'Login zawiera jeden z zakazanych znaków " \' & < > ',
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
                'min_length' => 10,
                'max_length' => 45,
                'validator_message' => 'Podana wartość nie może być hasłem, upewnij się że hasło ma przynajmniej 10 znaków',
                'regexp' => '/^(?!.*["\'<>]|.*&#(?:34|38|39|60|62);).*$/',
                'regexp_message' => 'Hasło zawiera jeden z zakazanych znaków " \' & < > ',
                //'message_type' => error
            ]
        );
        if(!$validator->isLastOK())
            $bothParamsAreOk = false;
        
        
        $this->form->email = $validator->validateFromPost(
            "emailInput",
            [
                
                'required' => true ,
                'required_message' => 'Nie podałeś emailu :<',
                'email' => true,
                'max_length' => 45,
                'validator_message' => 'Upewnij się że podana wartość to poprawny adres email',
                'regexp' => '/^(?!.*["\'<>]|.*&#(?:34|38|39|60|62);).*$/',
                'regexp_message' => 'Email zawiera jeden z zakazanych znaków " \' & < > ',
                //'message_type' => error
            ]
        );
        if(!$validator->isLastOK())
            $bothParamsAreOk = false;
        
        $record = App::getDB()->select("user",["username","email"],
        [
            "OR"=>[
                "username"=> $this->form->login,
                "email"=> $this->form->email
            ]
        ]
        );
        
        foreach ($record as $curRecord) {
            if ($curRecord["email"]==$this->form->email){
                Utils::addErrorMessage("Jakieś konto korzysta już z tego adresu email :<");

            }
            if ($curRecord["username"]==$this->form->login){
                Utils::addErrorMessage("Jakiś użytkownik korzysta z tej nazwy użytkownika :<");

            }
            
        }
        
        if(App::getMessages()->getNumberOfErrors()>0){
            return false;
        }
        if($bothParamsAreOk){
            
            try {
                
                App::getDB()->insert("user",
                    [
                    "username"=> $this->form->login,
                    "password" => $this->form->password,
                    "email" => $this->form->email,
                    "role"  => "user",
                    "creation_data" => date("Y-m-d H:i:s")
                    ]
                );
                
                
                //App::
                RoleUtils::addRole("user");

                SessionUtils::store("username", $this->form->login);

                return true;

          
                
            } catch (\PDOException $e) {
                
                if (App::getConf()->debug){
                    Utils::addErrorMessage($e->getMessage());
                    return false;
                
                }
                else
                    App::getRouter()->redirectTo("fatalError");
                
            }
           

        }
        return false;
    }
    public function action_registerValidate() {

        if($this->validateRegisterParams()){
            App::getMessages()->clear();
            Utils::addInfoMessage("Rejestracja zakończona sukcesem :>");
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo("home");

        }
        else{
            App::getSmarty()->assign("previousForm",$this->form);
            App::getSmarty()->assign("title","Register"); 
            App::getSmarty()->display("Register.tpl");
        }

        
    }
    
    public function action_register(){
        App::getSmarty()->assign("title","Register"); 
        App::getSmarty()->display("Register.tpl");
    }
    

    
}
