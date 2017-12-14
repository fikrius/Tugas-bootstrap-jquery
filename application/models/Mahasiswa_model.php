<?php  

class Mahasiswa_model extends CI_Model{

	public function get_all_mahasiswa(){
		$this->db->from('mahasiswa');
		$query = $this->db->get();
		return $query->result();
	}

}