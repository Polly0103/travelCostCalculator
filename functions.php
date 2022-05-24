<?php

function validateRequest($data): bool
{
	if(is_numeric($data) && $data>0)
	{
		return true;
	}
	
	return false;
}


function getFuel($distance, $fuel)
	{
		$neededFuel=$distance*$fuel/100;
		return $neededFuel;
	}
	
function costOfTrip($neededFuel, $cost)
	{
		$result=$neededFuel*$cost;
		return $result;
	}
	

