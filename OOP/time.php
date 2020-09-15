<?php

class Time {

  private $seconds = 0;
  private $minutes = 0;
  private $hours = 0;

  /**
    * Constructor to create a new Time instance
    * @param int $hours (optional) Amount of hours
    * @param int $minutes (optional) Amount of minutes
    * @param int $seconds Amount of seconds
    * @return Time Time object
  */
  public function Time() {
    $a = func_get_args();
    $i = func_num_args();
    if (method_exists($this, $f='__construct'.$i)) {
        call_user_func_array(array($this,$f),$a);
    } 
  }

  public function __construct1($seconds) {
    $this->seconds = $seconds;
  }

  public function __construct2($minutes, $seconds) {
    $this->seconds = $seconds;
    $this->minutes = $minutes;
  }

  public function __construct3($hours, $minutes, $seconds) {
    $this->seconds = $seconds;
    $this->minutes = $minutes;
    $this->hours = $hours;
  }

  /**
    * Returns the Length in seconds
    * @return int length in seconds
  */
  public function getLengthInSeconds() {
    $totalSeconds = $this->seconds;
    $totalSeconds += $this->minutes * 60;
    $totalSeconds += $this->hours * 60 * 60;

    return $totalSeconds;
  }


  /**
    * Returns the Length formatted to hh:mm:ss
    * @return string hh:mm:ss formatted time
  */
  public function __toString() {
    $totalSeconds = $this->getLengthInSeconds();
    return sprintf("%02d%s%02d%s%02d", floor($totalSeconds / 3600), ':', ($totalSeconds / 60) % 60, ':', $totalSeconds % 60);
  }

}