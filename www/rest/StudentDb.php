<?php 
/**
* 
*/
class StudentDb
{
	public $id;
	public $first_name;
	public $last_name;
	public $email;
	public $city;
	public $street;
	public $state;
	public $phone;
	
	function __construct($id, $first_name, $last_name, $email, $city, $street, $state, $phone)
	{
		$this->id = $id;
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->email = $email;
		$this->city = $city;
		$this->street = $street;
		$this->state = $state;
		$this->phone = $phone;
	}
}