<?php 

class Database
{
	protected $db;

	public function __construct()
	{
		try {
			$this->db = new PDO("mysql:host=localhost;dbname=mvc_route;charset=utf8", "root", "");	
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		
	}
}