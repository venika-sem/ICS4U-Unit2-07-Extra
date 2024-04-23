<?php
  require_once 'Vehicle.php';
  
  class Bike extends Vehicle {
    private $cadence;
  
    public function __construct($color = 'unknown', $maxSpeed = 0, $speed = 0, $cadence = 0, $tireNum = 0) {
      parent::__construct($speed, $maxSpeed, $color);
      $this->cadence = $cadence;
      $this->tireNum = $tireNum;
    }
  
    public function accelerate($accelerationPower, $accelerationTime = 1) {
      $this->cadence += $accelerationPower;
      $this->speed = $this->cadence * 2;
      return $this->speed;
    }
  
    public function setCadence($cadence) {
       $this->cadence = $cadence;
       $this->speed = $cadence * 2;
    }
  
    public function ringBell() {
      echo "Ding ding!\n";
    }
  
    public function cadenceStatus() {
      echo "-> Cadence: {$this->cadence}\n";
    }
  }
?>
