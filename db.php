<?php
// class database {
// 	public $host;
// 	public $username;
// 	public $password;
// 	public $db_name;
// 	public $connect;
// 	public $aray = [];
	

// 	function __construct($host, $username, $password, $db_name){
// 		$this -> host = $host;
// 		$this -> username = $username;
// 		$this -> password = $password;
// 		$this -> db_name = $db_name;
// 	}

// 	public function connect(){
// 		$this -> connect = mysqli_connect($this -> host, $this -> username, $this -> password, $this -> db_name);
// 		if(!$this -> connect){
// 			echo 'Database not found';
// 		}
// 	}

// 	// public function query($column = '*', $table){
// 	// 	$sql = "SELECT $column FROM $table";
// 	// 	$query = mysqli_query($this -> connect, $sql);

// 	// 	while($row = mysqli_fetch_assoc($query)){
// 	// 		array_push($this -> aray, $row);
// 	// 	}
// 	// }
// 	// public function answer(){
// 	// 	return $this -> aray;
// 	// }
// }


// $a = new database('localhost', 'root', '', 'backend');
// $a -> connect();

// $a -> query('id,name','menu');
// $a -> answer();




$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'backend';

$connect = mysqli_connect($host, $username, $password, $db_name);

if(!$connect){
	echo 'Database not found';
}