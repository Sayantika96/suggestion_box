<?php
class BaseRepo
{
	
	public $db;

	function __construct()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$myDb = 'suggestion_box';
		$connection = new mysqli($servername, $username,$password,$myDb);
		if (!isset(($this->db))) {
			$this->db = $connection;
		}
	}
}	
?>