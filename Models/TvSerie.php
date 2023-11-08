<?php

class TvSerie extends Production{

  use Age;

  public $number_of_episodes;
  public $number_of_seasons;

  public function __construct( int $_start_published_year, int $_aired_to_year, int $_number_of_episodes, int $_number_of_seasons, string $_title, array $_type, Media $_image){
    $this->start_published_year = $_start_published_year;
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;
    parent::__construct($_title, $_type, $_image);
  }

  public function getFullInfo(){
    return "<p class='card-text'><strong>Anno di inizio: </strong>$this->start_published_year </p> 
      <p class='card-text'><strong>Anno di fine: </strong>$this->aired_to_year</p>  
      <p class='card-text'><strong>Episodi Totali: </strong>$this->number_of_episodes</p> 
      <p class='card-text'><strong>Numero Stagioni: </strong>$this->number_of_seasons</p>";
  }
}