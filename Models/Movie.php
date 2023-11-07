<?php

class Movie extends Production{
  public $published_year;
  public $running_timedurata;

  public function __construct( int $_published_year, int $_running_timedurata, string $_title, array $_type, Media $_image){
    $this->published_year = $_published_year;
    $this->running_timedurata = $_running_timedurata;
    parent::__construct($_title, $_type, $_image);
  }
}