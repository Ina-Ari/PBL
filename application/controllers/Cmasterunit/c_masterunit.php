<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_masterunit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmasterunit/m_masterunit');
	}

	public function index()
	{
		$isi = $this->m_masterunit->getUnit();
	    $data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vmasterunit/v_Unit',
	      'isi'       	=> $isi,
	      'script'    	=> 'partial/script',
	      'active_tab' 	=> 'Unit'
	    ];
	    $this->load->view('master', $data);
	}

	public function tambahUnit()
	{
		$data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vmasterunit/v_insertUnit',
	      'script'    	=> 'partial/script',
	      'active_tab' 	=> 'Unit'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertUnit()
	{
		$valid = $this->m_masterunit->validasiUnit();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$data = [
		      'bootstrap' 	=> 'partial/bootstrap',
		      'loader'    	=> 'partial/loader',
		      'navbar'    	=> 'partial/navbar',
		      'sidebar'   	=> 'partial/sidebar',
		      'header'    	=> 'partial/header',
		      'content'   	=> 'Vmasterunit/v_insertUnit',
		      'script'    	=> 'partial/script',
		      'active_tab' 	=> 'Unit'
		    ];
		    $this->load->view('master', $data);

		} else {
			$this->m_masterunit->insertUnit();
			redirect('Cmasterunit/c_masterunit');
		}
	}

	public function ubahUnit($id)
	{
		$isi = $this->m_masterunit->detailUnit($id);
	    $data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vmasterunit/v_editUnit',
	      'isi'       	=> $isi,
	      'script'    	=> 'partial/script',
	      'active_tab' 	=> 'Unit'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateUnit($id)
	{
		$valid = $this->m_masterunit->validasiUnit();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$isi = $this->m_masterunit->detailUnit($id);
		    $data = [
		      'bootstrap' 	=> 'partial/bootstrap',
		      'loader'    	=> 'partial/loader',
		      'navbar'    	=> 'partial/navbar',
		      'sidebar'   	=> 'partial/sidebar',
		      'header'    	=> 'partial/header',
		      'content'   	=> 'Vmasterunit/v_editUnit',
		      'isi'       	=> $isi,
		      'script'    	=> 'partial/script',
		      'active_tab' 	=> 'Unit'
		    ];
		    $this->load->view('master', $data);

		} else {
			$this->m_masterunit->editUnit($id);
			redirect('Cmasterunit/c_masterunit');
		}
		
	}

	public function hapusUnit($id)
	{
		$this->m_masterunit->deleteUnit($id);
		redirect('Cmasterunit/c_masterunit');
	}

}

/* End of file c_masterunit.php */
/* Location: ./application/controllers/c_masterunit.php */