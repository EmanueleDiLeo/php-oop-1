<?php

class Movie extends Production{
  public $published_year;
  public $duration;

  public function __construct( int $_published_year, int $_duration, string $_title, array $_type, Media $_image){
    $this->published_year = $_published_year;
    $this->duration = $_duration;
    parent::__construct($_title, $_type, $_image);
  }
}