<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

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

	public function store(){
		$upload_foto = $_FILES['foto'];
            if ($upload_foto) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/slider/';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }

        $data = [
            'nama'				=> $this->input->post('nama'),
            'deskripsi'			=> $this->input->post('deskripsi'), 
			'foto'				=> $foto,
        ];
        $this->db->insert('tb_slider',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Menambahkan slider !</div>');
        redirect(base_url('admin/slider'));
	}

	public function update($id){
		$foto       = $_FILES['foto']['name'];
		$data = [
			'nama'				=> $this->input->post('nama'),
            'deskripsi'			=> $this->input->post('deskripsi'), 
          
        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/pengguna/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $gambarLama = $this->input->post('foto_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/slider/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',$id);
        $this->db->update('tb_slider',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui slider!</div>');
        redirect(base_url('admin/slider'));
       
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$data = $this->db->query("SELECT * FROM tb_slider where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/slider/'.$u->foto);
        } 
        $this->db->where('id',$id)->delete('tb_slider');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus Slider !</div>');
        redirect(base_url('admin/slider'));
	}
}

/* End of file Pengguna.php */
/* Location: ./application/controllers/admin/Pengguna.php */
