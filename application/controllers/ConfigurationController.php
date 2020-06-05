<?php

namespace application\controllers;
/**
 *
 */
 use application\core\Controller;
 use application\lib\Security;


 /**
  *
  */
 class ConfigurationController extends Controller
 {

   protected $acl = [
     'all'=>['registerAdminAction',]
   ];


   public function registerAdminAction()
   {
       $this->view->render('Регистрация администратора',['menu' => 'defaultMenu']);
   }

   public function addAdminAction()
   {
     //$security = new Security();

     $hashArray = $this->security->setLogPass($_POST['loginAdm'], $_POST['passwordAdm']);
     //var_dump($hashArray);
     //debug([$_POST['loginAdm'], $_POST['passwordAdm'], $hashArray['login'], $hashArray['password'], $_POST['fio'], $hashArray['salt'] ]);
     //debug($this->model);
     $status = $this->model->addAdmin($hashArray['login'], $hashArray['password'], $_POST['fio'], $hashArray['salt']);
     //$this->redirect('');
     debug($status);
     echo "complete";
   }
   // public function configureAction()
   // {
   //   if ($this->model->isAdminThere() === 0) {
   //     $this->view->render('Первоначальная конфигурация', [$firstConfugiration = TRUE])
   //   }
   //   else {
   //     $this->view->render('Вход', [$firstConfigurtion = FALSE])
   //   }
   // }
 }
