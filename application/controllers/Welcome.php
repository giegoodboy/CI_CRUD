<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct(){
		parent::__construct();
		$this->load->model("Data","data_model");
		$this->load->helper('url');

	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function page2()
	{
		$resultSet = $this->data_model->download();
		$data['kirim'] = $resultSet;
		$this->load->view('teruskan', $data);
	}
	public function tambah()
	{
		$chat_message_id = rand(0,1000);
		$to_user_id = $this->input->post('to_user_id');
		$from_user_id = $this->input->post('from_user_id');
		$chat_message = $this->input->post('chat_message');
		$replay_message = "Kosong";
		$timestamp = date("Y-m-d H:i:s");
		$status = "Belum Dibaca";
 
		$data = array(
			'chat_message_id' => $chat_message_id,
			'to_user_id' => $to_user_id,
			'from_user_id' => $from_user_id,
			'chat_message' => $chat_message,
			'replay_message' => $replay_message,
			'timestamp' => $timestamp,
			'status' => $status
			);
		$this->data_model->input_data($data,'chat_message');

		//ini buat akses tampilan
			redirect('welcome/page2'); 

	}
	public function hapus(){
			 $kode=$this->input->post('hapusini');
        	$this->data_model->hapus_data($kode);
    	   redirect('welcome/page2'); 

	}
	public function edit(){
		$kode=$this->input->post('editini');
		$array['kiriman']= $kode;
		$this->load->view('edit',$array);
	}

	public function update(){
			$chat_message_id=$this->input->post('chat_message_id');	
			$to_user_id = $this->input->post('to_user_id');
			$from_user_id = $this->input->post('from_user_id');
			$chat_message = $this->input->post('chat_message');
			$timestamp = date("Y-m-d H:i:s");
			$status = "Belum Dibaca";

				// echo "$chat_message_id";

		 
			$data = array(

				'chat_message_id' => $chat_message_id,
				'to_user_id' => $to_user_id,
				'from_user_id' => $from_user_id,
				'chat_message' => $chat_message,
				'timestamp' => $timestamp,
				'status' => $status
			);
		 
			$where = array(
				'chat_message_id' => $chat_message_id
			);
			
			$this->data_model->update_data($where,$data,'chat_message');
			redirect('welcome/page2'); 
	}
	public function replay(){
		$kode=$this->input->post('balas');
		$nomertunggu = $kode;
		$balasan= $this->data_model->pesan($nomertunggu);
		$this->load->view('balas',$balasan);
	}

}
