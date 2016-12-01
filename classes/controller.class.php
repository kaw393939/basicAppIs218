<?php

    abstract class controller {
      
      protected $html;

      public function get() {}
      public function post() {}
      public function put() {}
      public function delete() {}
      public function __construct() {
        $header = 'put some header text here';
	$this->html .= $header;
      }
      public function getHTML() {
        
	return $this->html;
      }

    }
