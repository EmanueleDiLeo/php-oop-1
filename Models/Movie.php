<?php

class Movie extends Production{

  use Age;

  public $running_time;

  public function __construct( int $_start_published_year, int $_running_time, string $_title, array $_type, Media $_image){
    $this->start_published_year = $_start_published_year;
    $this->running_time = $_running_time;
    parent::__construct($_title, $_type, $_image);
  }

  public function getFullInfo(){
    
  }
}