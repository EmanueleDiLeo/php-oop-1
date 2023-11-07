<?php

  class Production{
   protected $title;
   protected $type;
   protected $image;

  public function __construct(string $_title, array $_type, Media $_image){
    $this->title = $_title;
    $this->type = $_type;
    $this->image = $_image;
  }

  public function setImage(Media $_image) {
    $this->image = $_image;
  }

  public function getTitle(){
    return $this->title;
  }

  public function getType(){
    return $this->type;
  }

  public function getImage(){
    return $this->image;
  }
  
}

?>