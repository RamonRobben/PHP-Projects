<?php

class Track {

  /**
   * @var int $id ID of the Track
   * @var string $name Name of the Track
   * @var string $artist Name of Artist of the Track
   * @var string $albumSource Album source of the Track
   * @var Category $style The style of the Category of the Track
   * @var Time $length Time object containing the Length of the Track
  */
  public $id;
  public $name;
  public $artist;
  public $albumSource;
  public $style;
  public $length;


  /**
    * Constructor to create a new Track instance
    * @param int $id ID for the given Track
    * @param string $name (optional) Give the Track a name
    * @param string $artist (optional) Give the Track an artist
    * @return Track Will return a Track object
  */
  public function __construct($id, $name = "", $artist = "") {
    $this->id = $id;
    $this->artist = $artist;
    $this->name = $name;
  }

  // Getters and Setters are below.

  /**
    * Gets the ID of the track
    * @return int ID of the Track
  */
  public function getId() {
    return $this->id;
  }

  /**
    * Sets the ID of the track
    * @param int $id ID to give the Track
  */
  public function setId($id) {
    $this->id = $id;
  }

  /**
    * Gets the name of the Track
    * @return string Name of the Track
  */
  public function getName() {
    return $this->name;
  }

  /**
    * Sets the Name of the track
    * @param string $name Name to give the Track
  */
  public function setName($name) {
    $this->name = $name;
  }

  /**
    * Gets the Artist of the Track
    * @return string Artist of the Track
  */
  public function getArtist() {
    return $this->artist;
  }

  /**
    * Sets the Artist of the Track
    * @param string Name of the Artist
  */
  public function setArtist($artist) {
    $this->artist = $artist;
  }

  /**
    * Gets the length of the Track formatted in hh:mm:ss
    * @return string Length formatted to hh:mm:ss
  */
  public function getLength() {
    return strval($this->length);
  }

  /**
    * Sets the Length of the Track
    * @param Time Time object containing length of Track
  */
  public function setLength($length) {
    $this->length = $length;
  }

  /**
    * Gets the Time object of the Track
    * @return string Length formatted to hh:mm:ss
  */
  public function getTime() {
    return $this->length;
  }

  /**
    * Gets the id of the Style of the Track
    * @return int id of the Style
  */
  public function getStyle() {
    return $this->style;
  }

  /**
    * Sets the Style of the Track
    * @param Category Category object of the Style
  */
  public function setStyle($style) {
    $this->style = $style;
  }

  /**
    * Gets the album source of the Track
    * @return string Source of the Album
  */
  public function getAlbumSource() {
    return $this->albumSource;
  }

  /**
    * Sets the AlbumSource of the Track
    * @param string Album Source of the Track
  */
  public function setAlbumSource($albumSource) {
    $this->albumSource = $albumSource;
  }

}