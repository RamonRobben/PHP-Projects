<?php

class TrackList {
    private $tracks;

    /**
      * Constructor to create a new TrackList
      * @param Track $track (optional) Amount of hours
    */
    public function TrackList() {
      $a = func_get_args();
      $i = func_num_args();
      if (method_exists($this, $f='__construct'.$i)) {
          call_user_func_array(array($this,$f),$a);
      } 
    }
  
    public function __construct0() {
      $this->tracks = new Collection();
    }
  
    public function __construct1($tracks) {
      $this->tracks = $tracks;
    }

    // Methods

    /**
      * Add Track to TrackList
      * @param Track Track to add to the TrackList
    */
    public function Add($track) {
      $this->tracks->addItem($track, $track->id);
    }

    /**
      * Remove Track from TrackList
      * @param Track Track to remove from the TrackList
    */
    public function Remove($track) {
      $this->tracks->deleteItem($track->id);
    }

    /**
      * Remove all Track from the TrackList
    */
    public function Clear() {
      $this->tracks = new Collection();
    }

    /**
      * Returns Collection with all Tracks
      * Use getTracks() if you want an Array with all Tracks in it
    */
    public function GetAllTracks() {
      return $this->tracks;
    }

    /**
      * Shuffles the TrackList to have Tracks in random order
      * @return TrackList Collection of Tracks in random order
    */
    public function Shuffle() {
      return $this->tracks->shuffleCollection();
    }

    /**
      * Get all Tracks from the TrackList in an Array
      * @return Array Array with Tracks
    */
    public function getTracks() {
      return count($this->tracks->getItems());
    }

    /**
      * Gets the duration of the TrackList in seconds
      * @return int Duration in Seconds
    */
    public function getTotalTime() {
      $totalSeconds = 0;
      foreach ($this->tracks->getItems() as $track) {
        $totalSeconds += $track->getTime()->getLengthInSeconds();
      }
      return $totalSeconds;
    }
}