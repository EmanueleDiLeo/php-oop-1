<?php

class Movie{
  public $name;
  public $duration;
  public $type;

  public function __construct( string $_name, float $_duration, string $_type){
    $this->name = $_name;
    $this->duration = $_duration;
    $this->type = $_type;
  }

  
}

?>