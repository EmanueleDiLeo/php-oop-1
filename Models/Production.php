<?php

  class Production{
   protected $title;
   protected $type;
   protected $image;

  public function __construct(string $_title, array $_type, Media $_image){
    
    if(empty($_title)){
      throw new Exception("Ci deve essere il titolo");
    }else{
      $this->title = $_title;
    }
    

    if(empty($_type)){
      throw new Exception("Ci deve essere almeno un genere");
    }else{
      $this->type = $_type;
    }

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

  public function getFullInfo(){
    return "$this->title | $this->type | $this->image";
  }
  
}

?>