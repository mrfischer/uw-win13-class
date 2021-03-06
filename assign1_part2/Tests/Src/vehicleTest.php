<?php

require_once('vehicleInterface.php');
/**
* Abstract class to represent vehicle
*/

abstract class Vehicle implements vehicleInterface
{
	/**
	* Number of doors
	* @var int
	*/
	protected $_numberOfDoors;

	/**
	* Return the umber of doors
	* @return int
	*/
	abstract public function getNumberOfDoors();
}


?>