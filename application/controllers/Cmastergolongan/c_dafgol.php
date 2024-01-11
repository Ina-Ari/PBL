<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_dafgol extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmastergolongan/m_dafgol');
	}

	public function index()
	{
		$isi = $this->m_dafgol->getDafgol();
	    $data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vmastergolongan/v_dafgol',
	      'isi'       	=> $isi,
	      'script'    	=> 'partial/script',
	      'active_tab' 	=> 'dafgol'
	    ];
	    $this->load->view('master', $data);
	}

	public function tambahDafgol()
	{
		$data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vmastergolongan/v_insertdafgol',
	      'script'    	=> 'partial/script',
	      'active_tab' 	=> 'dafgol'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertDafgol()
	{
		$valid = $this->m_dafgol->validasiMasterGolongan();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$data = [
		      'bootstrap' 	=> 'partial/bootstrap',
		      'loader'    	=> 'partial/loader',
		      'navbar'    	=> 'partial/navbar',
		      'sidebar'   	=> 'partial/sidebar',
		      'header'    	=> 'partial/header',
		      'content'   	=> 'Vmastergolongan/v_insertdafgol',
		      'script'    	=> 'partial/script',
		      'active_tab' 	=> 'dafgol'
		    ];
		    $this->load->view('master', $data);

		} else {
			$this->m_dafgol->insertDafgol();
			redirect('Cmastergolongan/c_dafgol');
		}
		
		
	}

	public function ubahDafgol($id)
	{
		$isi = $this->m_dafgol->detailDafgol($id);
	    $data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vmastergolongan/v_editdafgol',
	      'isi'       	=> $isi,
	      'script'    	=> 'partial/script',
	      'active_tab' 	=> 'dafgol'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateDafgol($id)
	{
		$valid = $this->m_dafgol->validasiMasterGolongan();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$isi = $this->m_dafgol->detailDafgol($id);
		    $data = [
		      'bootstrap' 	=> 'partial/bootstrap',
		      'loader'    	=> 'partial/loader',
		      'navbar'    	=> 'partial/navbar',
		      'sidebar'   	=> 'partial/sidebar',
		      'header'    	=> 'partial/header',
		      'content'   	=> 'Vmastergolongan/v_editdafgol',
		      'isi'       	=> $isi,
		      'script'    	=> 'partial/script',
		      'active_tab' 	=> 'dafgol'
		    ];
		    $this->load->view('master', $data);

		} else {
			$this->m_dafgol->editDafgol($id);
			redirect('Cmastergolongan/c_dafgol');
		}
	}

	public function hapusDafgol($id)
	{
		$this->m_dafgol->deleteDafgol($id);
		redirect('Cmastergolongan/c_dafgol');
	}

}

/* End of file c_dafgol.php */
/* Location: ./application/controllers/c_dafgol.php */