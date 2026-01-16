<?php
// Load the Car class so it can be used in this file
include 'car.php';

// Create a Car object
$car1 = new Car();

// Set values for the car
$car1->make = "Ford";
$car1->model = "Focus";
$car1->year = 2020;

// Display the car details in the browser
echo $car1->showCarDetails();
?>  

/*
Reflection:
The easiest part of this lab was creating the class and assigning values to the
object properties. I found using include to connect files understandable after
practicing it. The more difficult part was making sure everything was organized
correctly and that the files were linked properly.
*/
