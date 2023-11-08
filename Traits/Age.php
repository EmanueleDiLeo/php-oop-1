<?php

trait Age{
  public $start_published_year;
  public $aired_to_year;

  public function getStartAge(){
    return $this->start_published_year - $this->aired_to_year;
  }
}