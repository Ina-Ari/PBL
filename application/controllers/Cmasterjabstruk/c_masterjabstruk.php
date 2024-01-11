<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_masterjabstruk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmasterjabstruk/m_masterjabstruk');
	}

	public function index()
	{
		$isi = $this->m_masterjabstruk->getMasterJabStruk();
	    $data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vmasterjabstruk/v_masterjabstruk',
	      'isi'       	=> $isi,
	      'script'    	=> 'partial/script',
	      'active_tab' 	=> 'jabstruk'
	    ];
	    $this->load->view('master', $data);
	}

	public function tambahMasterJabStruk()
	{
		$data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vmasterjabstruk/v_tambahjabstruk',
	      'script'    	=> 'partial/script',
	      'active_tab' 	=> 'jabstruk'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertMasterJabStruk()
	{
		$valid = $this->m_masterjabstruk->validasiMasterJabStruk();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$data = [
		      'bootstrap' 	=> 'partial/bootstrap',
		      'loader'    	=> 'partial/loader',
		      'navbar'    	=> 'partial/navbar',
		      'sidebar'   	=> 'partial/sidebar',
		      'header'    	=> 'partial/header',
		      'content'   	=> 'Vmasterjabstruk/v_tambahjabstruk',
		      'script'    	=> 'partial/script',
		      'active_tab' 	=> 'jabstruk'
		    ];
		    $this->load->view('master', $data);

		} else {
			$this->m_masterjabstruk->insertMasterJabStruk();
			redirect('Cmasterjabstruk/c_masterjabstruk');
		}
	}

	public function ubahMasterJabStruk($id)
	{
		$isi = $this->m_masterjabstruk->detailMasterJabStruk($id);
	    $data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vmasterjabstruk/v_editjabstruk',
	      'isi'       	=> $isi,
	      'script'    	=> 'partial/script',
	      'active_tab' 	=> 'jabstruk'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateMasterJabStruk($id)
	{
		$valid = $this->m_masterjabstruk->validasiMasterJabStruk();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$isi = $this->m_masterjabstruk->detailMasterJabStruk($id);
		    $data = [
		      'bootstrap' 	=> 'partial/bootstrap',
		      'loader'    	=> 'partial/loader',
		      'navbar'    	=> 'partial/navbar',
		      'sidebar'   	=> 'partial/sidebar',
		      'header'    	=> 'partial/header',
		      'content'   	=> 'Vmasterjabstruk/v_editjabstruk',
		      'isi'       	=> $isi,
		      'script'    	=> 'partial/script',
		      'active_tab' 	=> 'jabstruk'
		    ];
		    $this->load->view('master', $data);

		} else {
			$this->m_masterjabstruk->editMasterJabStruk($id);
			redirect('Cmasterjabstruk/c_masterjabstruk');
		}
		
	}

	public function hapusMasterJabStruk($id)
	{
		$this->m_masterjabstruk->deleteMasterJabStruk($id);
		redirect('Cmasterjabstruk/c_masterjabstruk');
	}

}

/* End of file c_masterjabstruk.php */
/* Location: ./application/controllers/c_masterjabstruk.php */