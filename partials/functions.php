<?php

function times($duration){
  $hours = floor($duration / 60);
  $minutes = $duration - (60 * $hours);
  $message = $hours . 'h ' . $minutes . 'm';
  return $message;
}