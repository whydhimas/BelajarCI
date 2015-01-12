<?php
class personModel extends CI_Model {
	public function get_data_person() {
		$query = $this->db->get('person');
		return $query->result();
	}
	
	public function insertPerson($data){
		$query = $this->db->insert('person', $data); 
		return $query;
	}

	public function deletePersonModel($data){
		$query=$this->db->delete('person',$data);
		return $query;
	}

	public function getDataPersonId($data){
		$this->db->where($data);
		$query=$this->db->get('person');
		$data=$query->first_row();
		return $data;
	}

	public function getDataDetailPersonId($data){
		// $query=$this->db->get_where('detailsperson', $data);
		$this->db->where($data);
		$query=$this->db->get('detailsperson');
		return $query->result();
	}

	public function updatePersonModel($data){
		$this->db->where('idPerson',$data['idPerson']);
		$query=$this->db->update('person',$data);
		return $query;
	}

	public function get_data_personPaging($num, $offset){
		$query = $this->db->get('person', $num, $offset);
		return $query->result();
	}

	public function getAmountPerson(){
		return $this->db->get('person');
	}

	public function getjoindata(){
		$sql = "SELECT * FROM Person p left join detailsperson dp on p.idperson=dp.idperson";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function get_data_personPaging2($num, $offset) {
		$sql = "SELECT *,p.address as address, dp.address as schoolAddress FROM Person p left join detailsperson dp on p.idperson=dp.idperson limit $offset,$num";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getAmountPerson2(){
		$sql = "SELECT * FROM Person p left join detailsperson dp on p.idperson=dp.idperson";
		$query = $this->db->query($sql);
		return $query;
	}

	public function getFilterPersonPaging($num, $offset,$data) {
		$sql = "SELECT * FROM Person p left join detailsperson dp on p.idperson=dp.idperson where " .$data['tableFilter']. " like '%" .$data['textFilter']. "%'
		limit $offset,$num";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getFilterAmountPerson($data){
		$sql = "SELECT * FROM person p left join detailsperson dp on p.idperson=dp.idperson where " .$data['tableFilter']. " like '%" .$data['textFilter']. "%'";
		$query = $this->db->query($sql);
		return $query;
	}


}