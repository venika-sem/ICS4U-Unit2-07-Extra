<?php
  require_once 'Vehicle.php';
  require_once 'Truck.php';
  require_once 'Bike.php';
  
  $bmx = new Bike('Red', 40);
  
  echo "Created Bmx bike.\nStatus:\n";
  $bmx->status();
  
  echo "Set the cadence to 10\n";
  $bmx->setCadence(10);
  $bmx->status();
  
  echo "\nAccelerate by 15:\n";
  $bmx->accelerate(15);
  $bmx->status();
  
  echo "\nRing bell.\n";
  $bmx->ringBell();
  
  $bigTruck = new Truck('Grey', 200, 0, 'HGC-3456F');
  
  echo "\nCreated a Truck.\nStatus:\n";
  $bigTruck->status();
  
  echo "\nAccelerating, 10 of power for ten seconds:\n";
  $bigTruck->accelerate(10, 10);
  echo "New speed: " . $bigTruck->getSpeed() . "\n";
  
  echo "\nBreaking, 10 of power for 10 sec.\n";
  $bigTruck->accelerate(-10, 10);
  echo "New speed: " . $bigTruck->getSpeed() . "\n";
  
  echo "\nApplied air pressure of 10:\n";
  $bigTruck->applyAir(10);
  echo "New speed: " . $bigTruck->getSpeed() . "\n";
  
  echo "\nDone.";
?>
