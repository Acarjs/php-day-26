<?php 

class Song {

  public ?int $id = null;
  public ?string $name = null;
  public ?string $author = null;
  public ?int $length = null;
  public ?string $album = null;

  public static $total_songs = 0;

  public static function getTotalNrOfSongs() {
    //$this is an object is similar to static in a class 
    // static === this class
    return static :: $total_songs;
  }
 }