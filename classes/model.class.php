<?php
//put your database connection in this class
  abstract class model {
    private $guid;  
    public function __construct() {
      session_start();
      $this->guid = uniqid();
    }
    public function save() {
      $_SESSION[$this->guid] = (array) $this;
    }
  }  
