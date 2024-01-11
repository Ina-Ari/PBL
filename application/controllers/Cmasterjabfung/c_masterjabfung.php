<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_masterjabfung extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmasterjabfung/m_masterjabfung');
	}

	public function index()
	{
		$isi = $this->m_masterjabfung->getMasterJabFung();
	    $data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vmasterjabfung/v_masterjabfung',
	      'isi'       	=> $isi,
	      'script'    	=> 'partial/script',
	      'active_tab' 	=> 'jabfung'
	    ];
	    $this->load->view('master', $data);
	}

	public function tambahMasterJabFung()
	{
		$data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vmasterjabfung/v_tambahmasterjabfung',
	      'script'    	=> 'partial/script',
	      'active_tab' 	=> 'jabfung'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertMasterJabFung()
	{
		$valid = $this->m_masterjabfung->validasiMasterJabFung();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$data = [
		      'bootstrap' 	=> 'partial/bootstrap',
		      'loader'    	=> 'partial/loader',
		      'navbar'    	=> 'partial/navbar',
		      'sidebar'   	=> 'partial/sidebar',
		      'header'    	=> 'partial/header',
		      'content'   	=> 'Vmasterjabfung/v_tambahmasterjabfung',
		      'script'    	=> 'partial/script',
		      'active_tab' 	=> 'jabfung'
		    ];
		    $this->load->view('master', $data);

		} else {
			$this->m_masterjabfung->insertMasterJabFung();
			redirect('Cmasterjabfung/c_masterjabfung');
		}
	}

	public function ubahMasterJabFung($id)
	{
		$isi = $this->m_masterjabfung->detailMasterJabFung($id);
	    $data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vmasterjabfung/v_editmasterjabfung',
	      'isi'       	=> $isi,
	      'script'    	=> 'partial/script',
	      'active_tab' 	=> 'jabfung'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateMasterJabFung($id)
	{
		$valid = $this->m_masterjabfung->validasiMasterJabFung();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$isi = $this->m_masterjabfung->detailMasterJabFung($id);
		    $data = [
		      'bootstrap' 	=> 'partial/bootstrap',
		      'loader'    	=> 'partial/loader',
		      'navbar'    	=> 'partial/navbar',
		      'sidebar'   	=> 'partial/sidebar',
		      'header'    	=> 'partial/header',
		      'content'   	=> 'Vmasterjabfung/v_editmasterjabfung',
		      'isi'       	=> $isi,
		      'script'    	=> 'partial/script',
		      'active_tab' 	=> 'jabfung'
		    ];
		    $this->load->view('master', $data);

		} else {
			$this->m_masterjabfung->editMasterJabFung($id);
			redirect('Cmasterjabfung/c_masterjabfung');
		}
		
	}

	public function hapusMasterJabFung($id)
	{
		$this->m_masterjabfung->deleteMasterJabFung($id);
		redirect('Cmasterjabfung/c_masterjabfung');
	}

}

/* End of file c_masterjabfung.php */
/* Location: ./application/controllers/c_masterjabfung.php */