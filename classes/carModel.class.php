<?php
  class carModel extends model {
    private $make;
    private $model;
    
    public function setMake($make) {
      $this->make = $make;  
    }
    public function getMake() {
      return $this->make;  
    }
    public function setModel($model) {
      $this->model = $model;
    }
    public function getModel() {
      return $this->model;
    }
  }
