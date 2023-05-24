<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('loginValidate', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('signup', 'LoginCtrl');


Utils::addRoute('home', 'HomeCtrl');
Utils::addRoute('fatalError', 'FatalError');
//Utils::addRoute('thread', 'threadCtrl');
//Utils::addRoute('thread', 'threadCtrl');

//Utils::addRoute('profile', 'profileCtrl');
//Utils::addRoute('message', 'messageCtrl');


Utils::addRoute('new', 'NewCtrl');


