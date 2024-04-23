<?php
  class Truck extends Vehicle {
    private $licensePlate;
  
    public function __construct($color = 'unknown', $maxSpeed = 0, $speed = 0, $licensePlate = 'unknown', $tireNum = 0) {
      parent::__construct($speed, $maxSpeed, $color);
      $this->licensePlate = $licensePlate;
      $this->tireNum = $tireNum;
    }
  
    public function applyAir($airPressure) {
      $this->speed -= $airPressure / 2;
      echo "New Speed: {$this->speed}\n";
    }
  
    public function plateStatus() {
      echo "-> License plate: {$this->licensePlate}\n";
    }
  
    public function applyAirStatus() {
      echo "New Speed: {$this->speed}\n";
    }
  
    public function accelerate($accelerationPower, $accelerationTime) {
      return parent::accelerate($accelerationPower, $accelerationTime);
    }
  }
?>
