<?php

require_once 'vehicle.php';
/**
* Class to represent car 
*/

class truck extends Vehicle
{
	/**
	* @var string
	*/
	private $year;
	/**
	* Set the year of the car
	* @param string
	*/
	public function setYear($yr){
		$this->year = $yr;
	}
	/**
	* Return the year of the car
	* @return string
	*/
	public function getYear(){
		return $this->year;
	}
	/**
	* Declared abstract funtion from Vehicle
	* Return the umber of doors
	* @return int
	*/
	function getNumberOfDoors(){
		return $this->_numberOfDoors;
	}
	/**
	* Implement honk method
	* @return string
	*/
	public function honk(){
		return '';
	}

	
}


?>