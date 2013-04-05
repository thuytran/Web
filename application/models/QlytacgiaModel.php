<?php
class QlytacgiaModel extends CI_Model{
	
	public function insertUser($user)
	{
		$this->db->insert('qlytacgia', $user);
	}	
}
?>