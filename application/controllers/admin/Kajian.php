<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kajian extends CI_Controller {

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
		$data['user']	= $this->db->order_by('id','desc')->get('tb_kajian')->result();
		$this->load->view('admin/v_kajian',$data);
	}

	// Add a new item
	public function add()
	{
		$this->load->view('admin/v_kajianadd');
	}

	public function store(){
		$upload_foto = $_FILES['foto'];
            if ($upload_foto) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/kajian/';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }

        $data = [
            
            'nama'				=> $this->input->post('nama'),  
            'kategori'			=> $this->input->post('kategori'),
            'deskripsi'			=> $this->input->post('deskripsi'),
            'tanggal'          	=> $this->input->post('tanggal'),
			'jam'				=> $this->input->post('jam'),
			'tempat'			=> $this->input->post('tempat'),
			'peserta'			=> $this->input->post('peserta'),
			'created_at'		=> date("d-m-Y h:i:s"),
			'foto'				=> $foto,
        ];
        $this->db->insert('tb_kajian',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Menambahkan Kajian !</div>');
        redirect(base_url('admin/kajian'));
	}



	public function update($id){
		$foto       = $_FILES['foto']['name'];
		$data = [
            'nama'				=> $this->input->post('nama'),  
            'kategori'			=> $this->input->post('kategori'),
            'deskripsi'			=> $this->input->post('deskripsi'),
            'tanggal'          	=> $this->input->post('tanggal'),
			'jam'				=> $this->input->post('jam'),
			'tempat'			=> $this->input->post('tempat'),
			'peserta'			=> $this->input->post('peserta'),
			'updated_at'		=> date("d-m-Y h:i:s"),
          
        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/kajian/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $gambarLama = $this->input->post('foto_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/kajian/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',$id);
        $this->db->update('tb_kajian',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Kajian!</div>');
        redirect(base_url('admin/kajian'));
       
	}


	//Delete one item
	public function delete( $id = NULL )
	{
		$data = $this->db->query("SELECT * FROM tb_kajian where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/kajian/'.$u->foto);
        } 
        $this->db->where('id',$id)->delete('tb_kajian');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus Kajian !</div>');
        redirect(base_url('admin/kajian'));
	}
}

/* End of file Pengguna.php */
/* Location: ./application/controllers/admin/Pengguna.php */
