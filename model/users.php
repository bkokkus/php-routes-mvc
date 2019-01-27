<?php 

class Users extends Model 
{

	public function get_all(){
		return $this->db->query('SELECT * FROM user')->fetchAll(PDO::FETCH_OBJ);
	}

}