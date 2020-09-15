<?php

abstract class MemoCartridgeType {
  const __default = self::Unknown;
    
  const C60 = 1;
  const C90 = 2;
  const C120 = 3;
  const Unknown = 4;
}

class MemoRecorder extends AudioDevice {
  
  private $MaxCartridgeType;

  /**
   * Creates new Instance of a MemoRecorder
   * @param int $serialId
   */
  public function __construct($serialId) {
    $this->setSerialId($serialId);
    $this->MaxCartridgeType = MemoCartridgeType::C120;
  }

  /**
   * Displays Storage information
   * @return String "Max capacity [minutes] min."
   */
  public function DisplayStorageCapacity() {
    switch ($this->getSerialId()) {
      case MemoCartridgeType::C60:
        return "Max capacity 60 min.";
        break;
      case MemoCartridgeType::C90:
        return "Max capacity 90 min.";
        break;
      case MemoCartridgeType::C120:
        return "Max capacity 120 min.";
        break;
      case MemoCartridgeType::Unknown:
        return "Max capacity unknown.";
        break;
      default:
        return "Max capacity unknown.";
    }
  }

  // Getter Setters

  /**
    * Get Cartidge Type Id with most Storage
    * @return int type of Cartridge
  */
  public function getMaxCartridgeType() {
    return $this->MaxCartridgeType;
  }

  /**
    * Sets the MaxCartridgeType
    * @param int $MaxCartridgeType
  */
  public function setMaxCartridgeType($MaxCartridgeType) {
    $this->MaxCartridgeType = $MaxCartridgeType;
  }


}