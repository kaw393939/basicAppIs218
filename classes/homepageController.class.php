<?php

    class homepageController extends controller {
      

      public function get() {
        $this->html .= '<a href="index.php?controller=carController">Car
	Controller</a>';
	$this->html .= '<h1>Hello this is your homepage controller</h1>';
	session_start();
	print_r($_SESSION);
      }
      public function post() {}
      public function put() {}
      public function delete() {}


    }
