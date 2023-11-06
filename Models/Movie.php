<?php

class Movie{
  public $title;
  public $duration;
  public $type;

  public function __construct( string $_title, int $_duration, array $_type){
    $this->title = $_title;
    $this->duration = $_duration;
    $this->type = $_type;
  }

  
}

?>