<?php

    class userController extends controller {
      

      public function get() {
        $form = new userformview;
	$form_html = $form->getHTML();
        $this->html .= $form_html; 
	
      }
      public function post() {
        print_r($_POST);
	$car = new userModel;
	$car->setUsername($_POST['username']);
	$car->setPassword($_POST['password']);
	$car->save();
	header('Location: index.php');
      }
      public function put() {}
      public function delete() {}


    }
