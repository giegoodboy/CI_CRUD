<?php 

class Data extends CI_Model{

	public function download(){
		$sql="SELECT * FROM chat_message";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function pesan($nomertunggu){
		$this->db->get_where($nomertunggu);
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	public function tampil_data(){
		return $this->db->get('user');
	}
	function hapus_data($kode){
        $hasil=$this->db->query("DELETE FROM chat_message WHERE chat_message_id='$kode'");
        return $hasil;
    }


    function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}

