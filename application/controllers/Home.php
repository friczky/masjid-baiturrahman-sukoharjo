<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Home extends CI_Controller {

		public function index()
		{
			$data['slider']	= $this->db->order_by('id','desc')->get('tb_slider')->result();
			$data['infaq']	= $this->db->order_by('id','desc')->get('tb_infaq')->result();
			$data['infaq_masuk']	= $this->db->select_sum('jumlah')->where('status','Masuk')->get('tb_infaq')->row_array();
			$data['infaq_keluar']	= $this->db->select_sum('jumlah')->where('status','Keluar')->get('tb_infaq')->row_array();
			$data['title'] 	= 'Beranda' ;
			$this->load->view('home/v_home',$data);     
		}

		public function berita() {
			$data['title'] = 'Berita' ;
			$this->load->view('home/v_berita',$data);
		}
		public function profile() {
			$data['title'] = 'Profile' ;
			$data['profile'] = $this->db->where('slug','profile')->get('tb_tentang')->result();
			$this->load->view('home/v_profile',$data);
		}

		public function sejarah() {
			$data['title'] = 'Sejarah' ;
			$data['sejarah'] = $this->db->where('slug','sejarah')->get('tb_tentang')->result();
			$this->load->view('home/v_sejarah',$data);
		}

		public function dewanpengurus() {
			$data['title'] = 'Dewan Pengurus' ;
			$data['dp'] = $this->db->where('slug','dewanpengurus')->get('tb_tentang')->result();
			$this->load->view('home/v_dewanpengurus',$data);
		}

		public function jadwalkajian() {
			$data['title'] = 'Jadwal Kajian' ;
			$data['jk'] = $this->db->get('tb_kajian')->result();
			$this->load->view('home/v_jadwalkajian',$data);
		}

		public function jadwaljumat() {
			$data['title'] = 'Jadwal Jumat' ;
			$data['jj'] = $this->db->get('tb_jumatan')->result();
			$this->load->view('home/v_jadwaljumat',$data);
		}

		public function event() {

			$this->load->view('home/v_evenet');
		}

		public function laporaninfaq() {

			$this->load->view('home/v_laporaninfaq');
		}

		public function takmirmasjid() {

			$this->load->view('home/v_takmirmasjid');
		}

		public function pengumuman() {

			$this->load->view('home/v_pengumuman');
		}

		public function lembaga() {

			$this->load->view('home/v_lembaga');
		}

		public function layanan() {

			$this->load->view('home/v_layanan');
		}

		public function inventaris() {

			$this->load->view('home/v_inventaris');
		}

		public function perpustakaan() {

			$this->load->view('home/v_perpustakaan');
		}

        
}
        
    /* End of file  Home.php */
        
                            