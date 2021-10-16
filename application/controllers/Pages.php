<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{
    function __construct()
    {
        parent::__construct();

		$this->load->model('m_data');
       
    }

			public function pages()
			{
                $data['judul'] = 'Pages';
	
				$data['halaman'] = $this->m_data->get_data('halaman')->result();
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/pages/pages',$data);
				$this->load->view('dashboard/footer');
			}

            public function tambah()
            {
                $data['judul'] = 'Tambah Halaman';
                $this->load->view('dashboard/header',$data);
                $this->load->view('dashboard/pages/tambah',$data);
                $this->load->view('dashboard/footer');
            }


	
	
}
