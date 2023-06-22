<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('loginValidate', 'LoginCtrl');

Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('registerValidate', 'RegisterCtrl');

Utils::addRoute('logout', 'LoginCtrl');


Utils::addRoute('home', 'HomeCtrl');
Utils::addRoute('fatalError', 'FatalError');

//CRUD dla kategorii
Utils::addRoute('editCategory', 'CategoryUpdate',['admin']);
Utils::addRoute('editCategoryView', 'CategoryUpdate',['admin']);
Utils::addRoute('deleteCategory', 'CategoryCD',['admin']);
Utils::addRoute('addCategory', 'CategoryCD',['admin']);
Utils::addRoute('addCategoryView', 'CategoryCD',['admin']);
Utils::addRoute('category', 'Category');
Utils::addRoute('categoryFilterThreadList', 'Category');
Utils::addRoute('deleteThread', 'Category',['user']);

Utils::addRoute('thread', 'Thread');
Utils::addRoute('postMessage', 'Thread',['user']);
Utils::addRoute('messageList', 'Thread');

//Utils::addRoute('profile', 'profileCtrl');
//Utils::addRoute('message', 'messageCtrl');


Utils::addRoute('new', 'NewCtrl');


