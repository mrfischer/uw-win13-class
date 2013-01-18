<?php

require_once 'car.php';
/**
* Class to represent car 
*/

class civic extends Car
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
	* Implement honk method
	* @return string
	*/
	public function honk(){
		return 'honk honk';
	}

}


?>