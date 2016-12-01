<?php

    class carController extends controller {
      

      public function get() {
        $form = new carformview;
	$form_html = $form->getHTML();
        $this->html .= $form_html; 
	
      }
      public function post() {
        print_r($_POST);
	$car = new carModel;
	$car->setMake($_POST['make']);
	$car->setModel($_POST['model']);
	$car->save();
	header('Location: index.php');
      }
      public function put() {}
      public function delete() {}


    }
