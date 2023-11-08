<?php

class Movie extends Production{

  use Year;

  public $running_time;

  public function __construct( int $_start_published_year, int $_running_time, string $_title, array $_type, Media $_image){
    $this->start_published_year = $_start_published_year;
    $this->running_time = $_running_time;
    parent::__construct($_title, $_type, $_image);
  }

  public function getFullInfo(){
    $time = times($this->running_time);
    return "<p><strong>Anno di uscita:</strong> $this->start_published_year</p>
    <p><strong>Durata in minuti:</strong> $this->running_time minuti</p> 
    <p><Strong>Durata:</Strong> $time</p>";
  }
}