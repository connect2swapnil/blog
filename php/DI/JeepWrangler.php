<?php
include 'Petrol.php';
class JeepWrangler
{
    public function __construct(Petrol $fuel)
    {
        $this->fuel = $fuel;
    }
     
    public function refuel($litres)
    {
        return $litres * $this->fuel->getPrice();
    }
}
 
$petrol = new Petrol;
$car = new JeepWrangler($petrol);
 
echo $cost = $car->refuel(60);
