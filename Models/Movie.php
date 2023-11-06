<?php

class Movie{
  public $title;
  public $duration;
  public $type;
  public $image;

  public function __construct( string $_title, int $_duration, array $_type, Media $_image){
    $this->title = $_title;
    $this->duration = $_duration;
    $this->type = $_type;
    $this->image = $_image;
  }

  public function setImage(Media $_image) {
    $this->image = $_image;
  }
  
}

?>