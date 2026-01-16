<?php
// This class is used to describe a car
class Car {

    // Variables that store car details
    public $make;
    public $model;
    public $year;

    // Function puts all car details together
    public function showCarDetails() {
        return "Make: " . $this->make .
               " | Model: " . $this->model .
               " | Year: " . $this->year;
    }
}
?>
