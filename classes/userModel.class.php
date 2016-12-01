<?php
  class carModel extends model {
    private $username;
    private $password;
    
    public function setUsername($username) {
      $this->username = $username;  
    }
    public function getUsername() {
      return $this->username;  
    }
    public function setPassword($password) {
      $this->password = $password;
    }
    public function getPassword() {
      return $this->password;
    }
    
    public function save() {

      //put your saving to the database code here for the user and use the connection in model class
    }
  
  }








