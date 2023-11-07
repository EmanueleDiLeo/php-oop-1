<?php

  class Movie{
   private $title;
   private $duration;
   private $type;
   private $image;

  public function __construct( string $_title, int $_duration, array $_type, Media $_image){
    $this->title = $_title;
    $this->duration = $_duration;
    $this->type = $_type;
    $this->image = $_image;
  }

  public function setImage(Media $_image) {
    $this->image = $_image;
  }

  public function getTitle(){
    return $this->title;
  }

  public function getDuration(){
    return $this->duration;
  }

  public function getType(){
    return $this->type;
  }

  public function getImage(){
    return $this->image;
  }
  
}

?>