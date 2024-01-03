<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Mpegawai/m_pegawai');
	}

	// BAGIAN DATA UTAMA
	public function getAllData($id)
	{
		$gender = [['nama_gender' => 'Laki-Laki'],['nama_gender' => 'Perempuan']];
		$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
		$golongan = $this->m_pegawai->dataGolonganPegawai($id);
		$pendidikan = $this->m_pegawai->dataPendidikanPegawai($id);
		$masterpen = $this->m_pegawai->getTingPen();
		$diklatStruktural = $this->m_pegawai->dataDikstrukPegawai($id);
		$diklatFungsional = $this->m_pegawai->dataDikfungPegawai($id);
		$peg = $this->m_pegawai->dataPegawai($id);
		$data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    			=> 'partial/loader',
	      'navbar'   			=> 'partial/navbar',
	      'sidebar'   			=> 'partial/sidebar',
	      'header'    			=> 'partial/header',
	      'content'   			=> 'Vpegawai/v_pegawai',
	      'gender' 	  			=> $gender,
	      'status_validasi'		=> $status_validasi,
	      'golongan'			=> $golongan,
	      'pendidikan'			=> $pendidikan,
	      'masterpen'			=> $masterpen,
		  'diklatStruktural' 	=> $diklatStruktural,
		  'diklatFungsional' 	=> $diklatFungsional,
	      'peg'		  			=> $peg,
	      'script'    			=> 'partial/script',
	      'active_tab'  		=> 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}


	public function editDataUtama($id)
	{
		$this->m_pegawai->updateDataUtama($id);
		redirect("Cpegawai/c_pegawai/getAllData/{$id}");
	}


	//BAGIAN PENDIDIKAN 
	public function tambahPendidikan($id)
	{
		$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
		$peg = $this->m_pegawai->dataPegawai($id);
		$masterpen = $this->m_pegawai->getTingPen();
		$data = [
	      'bootstrap'	  	=> 'partial/bootstrap',
	      'loader'    	  	=> 'partial/loader',
	      'navbar'    	  	=> 'partial/navbar',
	      'sidebar'   	  	=> 'partial/sidebar',
	      'header'    	  	=> 'partial/header',
	      'content'   	  	=> 'Vpendidikan/v_tambahPendidikan',
	      'status_validasi'	=> $status_validasi,
	      'masterpen'	  	=> $masterpen,
	      'peg'		  	  	=> $peg,
	      'script'    	  	=> 'partial/script',
	      'active_tab'		=> 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertPendidikan($id)
	{
		$valid = $this->m_pegawai->validasiPendidikan();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
			$peg = $this->m_pegawai->dataPegawai($id);
			$masterpen = $this->m_pegawai->getTingPen();
			$data = [
		      'bootstrap'	  	=> 'partial/bootstrap',
		      'loader'    	  	=> 'partial/loader',
		      'navbar'    	  	=> 'partial/navbar',
		      'sidebar'   	  	=> 'partial/sidebar',
		      'header'    	  	=> 'partial/header',
		      'content'   	  	=> 'Vpendidikan/v_tambahPendidikan',
		      'status_validasi'	=> $status_validasi,
		      'masterpen'	  	=> $masterpen,
		      'peg'		  	  	=> $peg,
		      'script'    	  	=> 'partial/script',
		      'active_tab'		=> 'dafdosen'
		    ];
		    $this->load->view('master', $data);
		    
		} else {
			$this->m_pegawai->insertPendidikan($id);
   			redirect("Cpegawai/c_pegawai/getAllData/{$id}");
		}
	}

	public function editPendidikan($id, $id_pendidikan)
	{
		$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
		$con = $this->m_pegawai->getPendidikanById($id, $id_pendidikan);
		$masterpen = $this->m_pegawai->getTingPen();
		$data = [
	      'bootstrap' 			=> 'partial/bootstrap',
	      'loader'    			=> 'partial/loader',
	      'navbar'    			=> 'partial/navbar',
	      'sidebar'   			=> 'partial/sidebar',
	      'header'    			=> 'partial/header',
	      'content'   			=> 'Vpendidikan/v_editpendidikan',
	      'status_validasi'		=> $status_validasi,
	      'masterpen'			=> $masterpen,
	      'con'		  			=> $con,
	      'script'    			=> 'partial/script',
	      'active_tab'  		=> 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}

	public function updatePendidikan($id, $id_pegawai)
	{
		$valid = $this->m_pegawai->validasiPendidikan();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
			$con = $this->m_pegawai->getPendidikanById($id_pegawai, $id);
			// var_dump($con); die;
			$masterpen = $this->m_pegawai->getTingPen();
			$data = [
		      'bootstrap' 			=> 'partial/bootstrap',
		      'loader'    			=> 'partial/loader',
		      'navbar'    			=> 'partial/navbar',
		      'sidebar'   			=> 'partial/sidebar',
		      'header'    			=> 'partial/header',
		      'content'   			=> 'Vpendidikan/v_editpendidikan',
		      'status_validasi'		=> $status_validasi,
		      'masterpen'			=> $masterpen,
		      'con'		  			=> $con,
		      'script'    			=> 'partial/script',
		      'active_tab'  		=> 'dafdosen'
		    ];
		    $this->load->view('master', $data);
		} else {
			$this->m_pegawai->updateDataPendidikan($id, $id_pegawai);
			redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
		}
		
	}

	public function hapusPendidikan($id_pegawai, $id)
	{
		$this->m_pegawai->deletePendidikan($id_pegawai, $id);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}

	//BAGIAN GOLONGAN
	public function tambahGolongan($id)
	{
		$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
		$peg = $this->m_pegawai->dataPegawai($id);
		$mastergol = $this->m_pegawai->getMasterGol();
		$data = [
	      'bootstrap'	  => 'partial/bootstrap',
	      'loader'    	  => 'partial/loader',
	      'navbar'    	  => 'partial/navbar',
	      'sidebar'   	  => 'partial/sidebar',
	      'header'    	  => 'partial/header',
	      'content'   	  => 'Vgolongan/v_tambahgolongan',
	      'status_validasi'		=> $status_validasi,
	      'mastergol'	  => $mastergol,
	      'peg'		  	  => $peg,
	      'script'    	  => 'partial/script',
	      'active_tab'  => 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertGolongan($id)
	{
		$this->m_pegawai->insertGolongan($id);
	   	redirect("Cpegawai/c_pegawai/getAllData/{$id}");
	}

	public function editGolongan($id, $id_golongan)
	{
		$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
		$con = $this->m_pegawai->getGolonganById($id, $id_golongan);
		$mastergol = $this->m_pegawai->getMasterGol();
		$data = [
	      'bootstrap' => 'partial/bootstrap',
	      'loader'    => 'partial/loader',
	      'navbar'    => 'partial/navbar',
	      'sidebar'   => 'partial/sidebar',
	      'header'    => 'partial/header',
	      'content'   => 'Vgolongan/v_editgolongan',
	      'status_validasi'		=> $status_validasi,
	      'mastergol' => $mastergol,
	      'con'		  => $con,
	      'script'    => 'partial/script',
	      'active_tab'  => 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateGolongan($id, $id_pegawai)
	{
		$this->m_pegawai->updateDataGolongan($id, $id_pegawai);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}

	public function hapusGolongan($id_pegawai, $id)
	{
		$this->m_pegawai->deleteGolongan($id_pegawai, $id);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}

	//BAGIAN DIKLAT STRUKTURAL
	public function tambahDikstruk($id)
	{
		$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
		$peg = $this->m_pegawai->dataPegawai($id);
		$data = [
	      'bootstrap'	  => 'partial/bootstrap',
	      'loader'    	  => 'partial/loader',
	      'navbar'    	  => 'partial/navbar',
	      'sidebar'   	  => 'partial/sidebar',
	      'header'    	  => 'partial/header',
	      'content'   	  => 'Vdikstruk/v_tambahDikstruk',
	      'status_validasi'		=> $status_validasi,
	      'peg'		  	  => $peg,
	      'script'    	  => 'partial/script',
	      'active_tab'  => 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertDikstruk($id)
	{
		$this->m_pegawai->insertDikstruk($id);
	   	redirect("Cpegawai/c_pegawai/getAllData/{$id}");
	}

	public function editDikstruk($id, $id_diklat)
	{
		$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
		$con = $this->m_pegawai->getDikstrukById($id, $id_diklat);
		$data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vdikstruk/v_editDikstruk',
	      'status_validasi'		=> $status_validasi,
	      'con'		  	=> $con,
	      'script'    	=> 'partial/script',
	      'active_tab'  => 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateDikstruk($id, $id_pegawai)
	{
		$this->m_pegawai->updateDataDikstruk($id, $id_pegawai);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}

	public function hapusDikstruk($id_pegawai, $id_diklat)
	{
		$this->m_pegawai->deleteDikstruk($id_pegawai, $id_diklat);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}

	//BAGIAN DIKLAT FUNGSIONAL
	public function tambahDikfung($id)
	{
		$peg = $this->m_pegawai->dataPegawai($id);
		$data = [
	      'bootstrap'	  => 'partial/bootstrap',
	      'loader'    	  => 'partial/loader',
	      'navbar'    	  => 'partial/navbar',
	      'sidebar'   	  => 'partial/sidebar',
	      'header'    	  => 'partial/header',
	      'content'   	  => 'Vdikfung/v_tambahDikfung',
	      'peg'		  	  => $peg,
	      'script'    	  => 'partial/script',
	      'active_tab'  => 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertDikfung($id)
	{
		$this->m_pegawai->insertDikfung($id);
	   	redirect("Cpegawai/c_pegawai/getAllData/{$id}");
	}

	public function editDikfung($id, $id_diklat)
	{
		$con = $this->m_pegawai->getDikfungById($id, $id_diklat);
		$data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vdikfung/v_editDikfung',
	      'con'		  	=> $con,
	      'script'    	=> 'partial/script',
	      'active_tab'  => 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateDikfung($id, $id_pegawai)
	{
		$this->m_pegawai->updateDataDikfung($id, $id_pegawai);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}

	public function hapusDikfung($id_pegawai, $id_diklat)
	{
   		$this->m_pegawai->deleteDikfung($id_pegawai, $id_diklat);
    	redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}



}

/* End of file c_pegawai.php */
/* Location: ./application/controllers/c_pegawai.php */