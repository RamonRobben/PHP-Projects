<?php
define("BTW_PERCENTAGE", 21);

abstract class AudioDevice {

  protected $serialId;
  protected $model;
  protected $make;
  protected $priceExBtw;
  protected $creationDate;
  protected const BTW_PERCENTAGE = 21;

  /**
   * Displays identity information
   * @param bool $makeInfo (optional) Information about the make
   * @param bool $modelInfo (optional) Information about the model
   * @return String Serial: [SerialID]
   * @return String Serial: [SerialID] Make: [Make]
   * @return String Serial: [SerialID] Make: [Make] Model: [Model]
   */
  public function DisplayIdentity($makeInfo = false, $modelInfo = false) {
    

    $output = "Serial: $this->serialId";

    if ($makeInfo) {
      $output .= " Make: $this->make";
    }
    
    if ($modelInfo) {
      $output .= " Model: $this->model";
    }

    return $output;
  }


  /**
    * Get the Lifetime of the device in days
    * @return String Lifetime [days] days
  */
  public function GetDeviceLifeTime() {
    if (isset($this->creationDate) && !empty($this->creationDate)) {
      $interval = $this->creationDate->diff(new DateTime());
      return "Lifetime ".$interval->format('%R%a days');
    }else{
      return "Lifetime unknown";
    }
  }

  public function DisplayStorageCapacity() {

  }

  // Getters en Setters

  /**
    * Get serial ID
    * @return String SerialId
  */
  public function getSerialId() {
    return $this->serialId;
  }

  /**
    * Sets the serialId
    * @param int $serialId
  */
  public function setSerialId($serialId) {
    $this->serialId = $serialId;
  }

  /**
    * Get Model
    * @return String Model Information
  */
  public function getModel() {
    return $this->model;
  }

  /**
    * Sets the model
    * @param String $model model
  */
  public function setModel($model) {
    $this->model = $model;
  }

  /**
    * Get Make
    * @return String Make Information
  */
  public function getMake() {
    return $this->make;
  }

  /**
    * Sets the make
    * @param String $make make
  */
  public function setMake($make) {
    $this->model = $make;
  }

  /**
    * Get PriceExBtw
    * @return String PriceExBtw Information
  */
  public function getPriceExBtw() {
    return $this->priceExBtw;
  }

  /**
    * Sets the priceExBtw
    * @param String $priceExBtw price excluding btw
  */
  public function setPriceExBtw($priceExBtw) {
    $this->priceExBtw = $priceExBtw;
  }

  /**
    * Get ConsumerPrice
    * @return String ConsumerPrice
  */
  public function getConsumerPrice() {
    return $this->priceExBtw * (1 + (BTW_PERCENTAGE / 100));
  }

  /**
    * Get CreationDate. When the Device was created
    * @return DateTime CreationDate
  */
  public function getCreationDate() {
    return $this->creationDate;
  }

  /**
    * Sets the creationDate
    * @param DateTime $creationDate creationDate
  */
  public function setCreationDate($creationDate) {
    $this->creationDate = $creationDate;
  }
}