<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

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
		$data['slider']	= $this->db->order_by('id','desc')->get('tb_slider')->result();
		$this->load->view('admin/v_slider',$data);
	}

	// Add a new item
	public function profile()
	{
		$data['profile'] = $this->db->where('slug','profile')->get('tb_tentang')->result();
		$this->load->view('admin/v_profile',$data);
	}


	public function profile_update(){
		$foto       = $_FILES['foto']['name'];
		$data = [
            'isi'				=> $this->input->post('isi'),  
          
        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/tentang/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $gambarLama = $this->input->post('foto_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/tentang/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
		$slug = 'profile';
        $this->db->where('slug',$slug);
        $this->db->update('tb_tentang',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Sejarah!</div>');
        redirect(base_url('admin/tentang/profile'));
       
	}

	public function sejarah()
	{
		$data['profile'] = $this->db->where('slug','sejarah')->get('tb_tentang')->result();
		$this->load->view('admin/v_sejarah',$data);
	}


	public function sejarah_update(){
		$foto       = $_FILES['foto']['name'];
		$data = [
            'isi'				=> $this->input->post('isi'),  
          
        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/tentang/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $gambarLama = $this->input->post('foto_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/tentang/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
		$slug = 'sejarah';
        $this->db->where('slug',$slug);
        $this->db->update('tb_tentang',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Profile!</div>');
        redirect(base_url('admin/tentang/sejarah'));
       
	}

	public function dewanpengurus()
	{
		$data['profile'] = $this->db->where('slug','dewanpengurus')->get('tb_tentang')->result();
		$this->load->view('admin/v_dewanpengurus',$data);
	}


	public function dp_update(){
		$foto       = $_FILES['foto']['name'];
		$data = [
            'isi'				=> $this->input->post('isi'),  
          
        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/tentang/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $gambarLama = $this->input->post('foto_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/tentang/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
		$slug = 'dewanpengurus';
        $this->db->where('slug',$slug);
        $this->db->update('tb_tentang',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Dewan Pengurus!</div>');
        redirect(base_url('admin/tentang/dewanpengurus'));
       
	}

	
}

/* End of file Pengguna.php */
/* Location: ./application/controllers/admin/Pengguna.php */
