<?php

class Movie extends Production{
  public $published_year;
  public $running_time;

  public function __construct( int $_published_year, int $_running_time, string $_title, array $_type, Media $_image){
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;
    parent::__construct($_title, $_type, $_image);
  }

  public function getFullInfo(){
    
  }
}