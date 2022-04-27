<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jumatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
		$role = $this->session->userdata('role');
		// if ($role != 'Administrator') {
		// 	echo "<script> alert('Anda tidak mempunyai akses untuk membuka halaman ini !') ; window.location.href='../admin'; </script>";
		// }
	}

	// List all your items
	public function index()
	{	
		$data['jumat']	= $this->db->order_by('id','desc')->get('tb_jumatan')->result();
		$this->load->view('admin/v_jumatan',$data);
	}

	public function store(){
        $data = [
            
            'imam'				=> $this->input->post('imam'),  
            'khatib'			=> $this->input->post('khatib'),
            'muazdin'			=> $this->input->post('muazdin'),
            'bilal'          	=> $this->input->post('bilal'),
			'tanggal'			=> $this->input->post('tanggal')
        ];
        $this->db->insert('tb_jumatan',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Menambahkan Jadwal Jumatan !</div>');
        redirect(base_url('admin/jumatan'));
	}

	public function update($id){

		$data = [
	        'imam'				=> $this->input->post('imam'),  
            'khatib'			=> $this->input->post('khatib'),
            'muazdin'			=> $this->input->post('muazdin'),
            'bilal'          	=> $this->input->post('bilal'),
			'tanggal'			=> $this->input->post('tanggal')
          
        ];
       
        $this->db->where('id',$id);
        $this->db->update('tb_jumatan',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Jumatan!</div>');
        redirect(base_url('admin/jumatan'));
       
	}


	public function delete( $id = NULL )
	{
		$data = $this->db->query("SELECT * FROM tb_jumatan where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/jumatan/'.$u->foto);
        } 
        $this->db->where('id',$id)->delete('tb_jumatan');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus Jumatan !</div>');
        redirect(base_url('admin/jumatan'));
	}
}

