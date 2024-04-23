<?php
  class Vehicle {
    protected $color;
    protected $speed;
    protected $maxSpeed;
  
    public function __construct($speed = 0, $maxSpeed = 0, $color = 'unknown') {
      $this->color = $color;
      $this->speed = $speed;
      $this->maxSpeed = $maxSpeed;
    }
  
    // Getter method for speed property
    public function getSpeed() {
      return $this->speed;
    }
  
    // Setter method for speed property
    public function setSpeed($speed) {
      $this->speed = $speed;
    }
  
    public function accelerate($accelerationPower, $accelerationTime) {
      $accelerationPower = (int) $accelerationPower;
      $accelerationTime = (int) $accelerationTime;
  
      $this->speed += ($accelerationPower * $accelerationTime);
      return $this->speed;
    }
  
    public function break($brakePower, $brakeTime) {
      $this->speed -= ($brakePower * $brakeTime);
      return $this->speed;
    }
  
    public function status() {
      echo "-> Speed: {$this->speed}\n";
      echo "-> Max Speed: {$this->maxSpeed}\n";
      echo "-> Color: {$this->color}\n";
    }
  }
?>
