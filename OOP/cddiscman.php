<?php

interface IDisplay {

  public function GetResolutionInfo();

  public function getDisplayWidth();
  public function setDisplayWidth($width);

  public function getDisplayHeigth();
  public function setDisplayHeigth($height);

  public function getTotalPixels();

}

class CdDiscMan extends AudioDevice implements IDisplay {

  private $mBSize = 700;
  private $displayWidth;
  private $displayHeight;
  private $isEjected = false;


  /**
    * Constructor to create a new CdDiscMan Instance
    * @param int $serialId
  */
  public function __construct($serialId) {
    $this->setSerialId($serialId);
  }

  /**
    * Get total pixel count
    * @return int total pixel count
  */
  public function GetResolutionInfo() {
    $totalPixels = $this->displayHeight * $this->displayWidth;
    return "Resolution: $totalPixels pixels.";
  }

  /**
    * Returns the storage capacity
    * @return String storage capacity string
  */
  public function DisplayStorageCapacity() {
    return "$this->mBSize mB.";
  }

  /**
    * Toggles the isEjected status
    * @return bool isEjected
  */
  public function Eject() {
    $this->isEjected = !$this->isEjected;
  }

  /**
    * Convert the storage capacity to MB Size
    * @return int Storage Capacity in MB
  */
  public function getMbSize() {
    // mB (MegaBit) naar MB (MegaByte);
    return $this->mBSize / 8;
  }

  /**
    * Get the width in pixels
    * @return int Width in Pixels
  */
  public function getDisplayWidth() {
    return $this->displayWidth;
  }

  /**
    * Set the width in pixels
    * @param int Width in Pixels
  */
  public function setDisplayWidth($width) {
    $this->displayWidth = $width;
  }

  /**
    * Get the Height in pixels
    * @return int Height in Pixels
  */
  public function getDisplayHeigth() {
    return $this->displayHeight;
  }

  /**
    * Set the Height in pixels
    * @param int Height in Pixels
  */
  public function setDisplayHeigth($height) {
    $this->displayHeight = $height;
  }

  /**
    * Get total pixels of screen
    * @return int Total Pixels
  */
  public function getTotalPixels() {
    return $this->displayHeight * $this->displayWidth;
  }

  /**
    * Get value if CdDiscMan is Ejected
    * @return bool isEjected
  */
  public function getIsEjected() {
    return $this->isEjected;
  }

}