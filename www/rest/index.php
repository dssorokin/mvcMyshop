<?php
/**
* 
*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Address
{
	public $street = "";
	public $city = "";
	public $state = "";
	
	function __construct($street, $city, $state)
	{
		# code...
		$this->street = $street;
		$this->city = $city;
		$this->state = $state;
	}
}

class Student
{
	public $first_name;
	public $last_name;
	public $email;
	public $city;
	public $street;
	public $state;
	public $phone;

	function __construct($first_name, $last_name, $email, $city,
						 $street, $state, $ph_home, $ph_mobile)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->email = $email;
		$this->address = new Address($street, $city, $state);
		$this->phone = array("home" => $ph_home,
							"mobile" => $ph_mobile);
	}
}

$dan_sorokin = new Student('Daniil' , 'Sorokin' , 'dssorokin94@gmial.com', 
							'Vladimir', 'Lakina', 'Vl.region', '3423423', '8933103242');

$dan_data = json_encode($dan_sorokin);

var_dump($dan_data);die();

require_once('dbConnect.php');
$pdo = Db::getConnection();
$query = "SELECT * FROM students WHERE id IN (1,2)";
$students = $pdo->query($query, PDO::FETCH_ASSOC)->fetchAll();

foreach($students as $student)
{
	echo json_encode($student);
}

 ?>
