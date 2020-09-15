<?php

class Collection 
{
    private $items = array();

    /**
      * Adds object to the Collection with a specified key
      * @param object $obj Object to add to the Collection
      * @param int $key Key to assign to the Object
    */
    public function addItem($obj, $key = null) {
      if ($key == null) {
        $this->items[] = $obj;
      } else {
          if (isset($this->items[$key])) {
              throw new KeyHasUseException("Key $key already in use.");
          }
          else {
              $this->items[$key] = $obj;
          }
      }
    }

    /**
      * Deletes Object that has specified key
      * @param int $key Delete Object with this Key from the Collection
    */
    public function deleteItem($key) {
      if (isset($this->items[$key])) {
        unset($this->items[$key]);
      } else {
          throw new KeyInvalidException("Invalid key $key.");
      }
    }

    /**
      * Returns Object that has specified key
      * @param int $key key of object
      * @return Object Object from Collection
    */
    public function getItem($key) {
      if (isset($this->items[$key])) {
        return $this->items[$key];
      } else {
          throw new KeyInvalidException("Invalid key $key.");
      }
    }

    /**
      * Returns all items in the array
      * @return Array Array with objects
    */
    public function getItems() {
      return $this->items;
    }

    /**
      * Returns Collection that has been shuffled
      * @return Collection Returns a shuffled 
    */
    public function shuffleCollection() {
      $copy = $this->items;
      shuffle($copy);
      return $copy;
    }
}