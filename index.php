<?php

require 'functions.php';
require 'messages.php';

if(isset($_GET['distance']) && isset($_GET['fuel']) && isset($_GET['cost'])){
	$distance=trim($_GET['distance']);
	$fuel=trim($_GET['fuel']);
	$cost=trim($_GET['cost']);

	$errors = [];
	
	$dataToValidate=[
		'distance'=>$distance,
		'fuel'=>$fuel,
		'cost'=>$cost,
	];
	foreach($dataToValidate as $key=> $data) {
		$errors[$key] = validateRequest($data);
	}
	
	
	if ($errors['distance']===true && $errors['fuel']===true && $errors['cost']===true) {
		$neededFuel=getFuel($distance, $fuel);
		$result=costOfTrip($neededFuel, $cost);
	}
}
	
require 'formularz.view.php';
