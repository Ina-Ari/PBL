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
		$agama = [['nama_agama' => 'Islam'], ['nama_agama' => 'Hindu'], ['nama_agama' => 'Katolik'], 
				 ['nama_agama' => 'Kristen'], ['nama_agama' => 'Buddha'], ['nama_agama' => 'Khonghucu']];
		$gender = [['nama_gender' => 'Laki-Laki'],['nama_gender' => 'Perempuan']];
		$golongan = $this->m_pegawai->dataGolonganPegawai($id);
		$pendidikan = $this->m_pegawai->dataPendidikanPegawai($id);
		$diklatStruktural = $this->m_pegawai->dataDikstrukPegawai($id);
		$diklatFungsional = $this->m_pegawai->dataDikfungPegawai($id);
		$jabstuk = $this->m_pegawai->datajabstuk($id);
        $jabfung = $this->m_pegawai->datajafung($id);
		$peg = $this->m_pegawai->dataPegawai($id);
		$data = [
	      'bootstrap' 			=> 'partial/bootstrap',
	      'loader'    			=> 'partial/loader',
	      'navbar'   			=> 'partial/navbar',
	      'sidebar'   			=> 'partial/sidebar',
	      'header'    			=> 'partial/header',
	      'content'   			=> 'Vpegawai/v_pegawai',
	      'gender' 	  			=> $gender,
	      'golongan'			=> $golongan,
	      'pendidikan'			=> $pendidikan,
		  'diklatStruktural' 	=> $diklatStruktural,
		  'diklatFungsional' 	=> $diklatFungsional,
		  'jabstuk'				=> $jabstuk,
		  'jabfung'				=> $jabfung,
	      'peg'		  			=> $peg,
	      'agama'				=> $agama,
	      'script'    			=> 'partial/script',
	      'active_tab'  		=> 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}


	public function editDataUtama($id)
	{
		$valid = $this->m_pegawai->validasiDosen();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$agama = [['nama_agama' => 'Islam'], ['nama_agama' => 'Hindu'], ['nama_agama' => 'Katolik'], 
				 ['nama_agama' => 'Kristen'], ['nama_agama' => 'Buddha'], ['nama_agama' => 'Khonghucu']];
			$gender = [['nama_gender' => 'Laki-Laki'],['nama_gender' => 'Perempuan']];
			$golongan = $this->m_pegawai->dataGolonganPegawai($id);
			$pendidikan = $this->m_pegawai->dataPendidikanPegawai($id);
			$diklatStruktural = $this->m_pegawai->dataDikstrukPegawai($id);
			$diklatFungsional = $this->m_pegawai->dataDikfungPegawai($id);
			$jabstuk = $this->m_pegawai->datajabstuk($id);
	        $jabfung = $this->m_pegawai->datajafung($id);
			$peg = $this->m_pegawai->dataPegawai($id);
			$data = [
		      'bootstrap' 			=> 'partial/bootstrap',
		      'loader'    			=> 'partial/loader',
		      'navbar'   			=> 'partial/navbar',
		      'sidebar'   			=> 'partial/sidebar',
		      'header'    			=> 'partial/header',
		      'content'   			=> 'Vpegawai/v_pegawai',
		      'gender' 	  			=> $gender,
		      'golongan'			=> $golongan,
		      'pendidikan'			=> $pendidikan,
			  'diklatStruktural' 	=> $diklatStruktural,
			  'diklatFungsional' 	=> $diklatFungsional,
			  'jabstuk'				=> $jabstuk,
			  'jabfung'				=> $jabfung,
		      'peg'		  			=> $peg,
		      'agama'				=> $agama,
		      'script'    			=> 'partial/script',
		      'active_tab'  		=> 'dafdosen'
		    ];
		    $this->load->view('master', $data);
		} else {
			$this->m_pegawai->updateDataUtama($id);
			redirect("Cpegawai/c_pegawai/getAllData/{$id}");
		}
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
			$this->m_pegawai->insertPendidikan();
   			redirect("Cpegawai/c_pegawai/getAllData/{$id}");
		}
	}

	public function editPendidikan($id_pendidikan)
	{
		$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
		$con = $this->m_pegawai->getPendidikanById($id_pendidikan);
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
			$con = $this->m_pegawai->getPendidikanById($id);
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
			$this->m_pegawai->updateDataPendidikan($id);
			redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
		}
		
	}

	public function hapusPendidikan($id_pegawai, $id)
	{
		$this->m_pegawai->deletePendidikan($id);
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
		$valid = $this->m_pegawai->validasiGolongan();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
			$peg = $this->m_pegawai->dataPegawai($id);
			$mastergol = $this->m_pegawai->getMasterGol();
			$data = [
		      'bootstrap'	  	=> 'partial/bootstrap',
		      'loader'    	  	=> 'partial/loader',
		      'navbar'    	  	=> 'partial/navbar',
		      'sidebar'   	  	=> 'partial/sidebar',
		      'header'    	  	=> 'partial/header',
		      'content'   	  	=> 'Vgolongan/v_tambahgolongan',
		      'status_validasi'	=> $status_validasi,
		      'mastergol'	  	=> $mastergol,
		      'peg'		  	  	=> $peg,
		      'script'    	  	=> 'partial/script',
		      'active_tab'		=> 'dafdosen'
		    ];
		    $this->load->view('master', $data);
		    
		} else {
			$this->m_pegawai->insertGolongan($id);
	   		redirect("Cpegawai/c_pegawai/getAllData/{$id}");
		}
	}

	public function editGolongan($id_golongan)
	{
		$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
		$con = $this->m_pegawai->getGolonganById($id_golongan);
		$mastergol = $this->m_pegawai->getMasterGol();
		$data = [
	      'bootstrap' 		=> 'partial/bootstrap',
	      'loader'    		=> 'partial/loader',
	      'navbar'    		=> 'partial/navbar',
	      'sidebar'   		=> 'partial/sidebar',
	      'header'    		=> 'partial/header',
	      'content'   		=> 'Vgolongan/v_editgolongan',
	      'status_validasi'	=> $status_validasi,
	      'mastergol' 		=> $mastergol,
	      'con'		  		=> $con,
	      'script'    		=> 'partial/script',
	      'active_tab'  	=> 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateGolongan($id, $id_pegawai)
	{
		$valid = $this->m_pegawai->validasiGolongan();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
			$con = $this->m_pegawai->getGolonganById($id);
			// var_dump($con); die;
			$mastergol = $this->m_pegawai->getMasterGol();
			$data = [
		      'bootstrap' 			=> 'partial/bootstrap',
		      'loader'    			=> 'partial/loader',
		      'navbar'    			=> 'partial/navbar',
		      'sidebar'   			=> 'partial/sidebar',
		      'header'    			=> 'partial/header',
		      'content'   			=> 'Vgolongan/v_editgolongan',
		      'status_validasi'		=> $status_validasi,
		      'mastergol'			=> $mastergol,
		      'con'		  			=> $con,
		      'script'    			=> 'partial/script',
		      'active_tab'  		=> 'dafdosen'
		    ];
		    $this->load->view('master', $data);
		} else {
		$this->m_pegawai->updateDataGolongan($id);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
		}
	}

	public function hapusGolongan($id_pegawai, $id)
	{
		$this->m_pegawai->deleteGolongan($id);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}


	//JABATAN STRUKTURAL
	public function tambahjabstuk($id) 
	{
        $peg = $this->m_pegawai->dataPegawai($id);
        $id_js = $this->m_pegawai->getdatajabatan();
        $id_unit = $this->m_pegawai->getdataunit();
        $data = [
			'bootstrap'	      => 'partial/bootstrap',
			'loader'    	  => 'partial/loader',
			'navbar'    	  => 'partial/navbar',
			'sidebar'   	  => 'partial/sidebar',
			'header'    	  => 'partial/header',
            'content'     	  => 'vjabstuk/formadd_jabstuk',
            'masterjs'    	  => $id_js,
            'masterunit'  	  => $id_unit,
            'peg'         	  => $peg,
            'script'    	  => 'partial/script',
	      'active_tab'  	  => 'dafdosen'
        ];

        $this->load->view('master', $data);
    }

    public function insertjs($id)
	{
		$valid = $this->m_pegawai->getAddJabatanStrukturalValidationRules();
	    $this->form_validation->set_rules($valid);

	    if ($this->form_validation->run() == FALSE) {
			$peg = $this->m_pegawai->dataPegawai($id);
	        $id_js = $this->m_pegawai->getdatajabatan();
	        $id_unit = $this->m_pegawai->getdataunit();
	        $data = [
				'bootstrap'	      => 'partial/bootstrap',
				'loader'    	  => 'partial/loader',
				'navbar'    	  => 'partial/navbar',
				'sidebar'   	  => 'partial/sidebar',
				'header'    	  => 'partial/header',
	            'content'     	  => 'vjabstuk/formadd_jabstuk',
	            'masterjs'    	  => $id_js,
	            'masterunit'  	  => $id_unit,
	            'peg'         	  => $peg,
	            'script'    	  => 'partial/script',
		      'active_tab'  	  => 'dafdosen'
	        ];
	        $this->load->view('master', $data);

	    } else {
	        // Jika validasi berhasil, simpan data ke database
	        $insert_result = $this->m_pegawai->insertjabstuk();

	        if ($insert_result) {
	            // Redirect ke halaman yang diinginkan jika penyisipan berhasil
	            redirect("Cpegawai/c_pegawai/getAllData/{$id}");
	        } else {
	            // Tampilkan pesan kesalahan jika penyisipan gagal (opsional)
	            echo "Gagal menyimpan data ke database.";
	        }
	    }
	}

	public function editjabstuk($id_jabatan) 
	{
	    $js = $this->m_pegawai->getjabstukById($id_jabatan);
	    $masterjs = $this->m_pegawai->getdatajabatan();
	    $id_unit = $this->m_pegawai->getdataunit();
	    $data = [
			'bootstrap'	      => 'partial/bootstrap',
			'loader'    	  => 'partial/loader',
			'navbar'    	  => 'partial/navbar',
			'sidebar'   	  => 'partial/sidebar',
			'header'    	  => 'partial/header',
	        'content'     	  => 'vjabstuk/editjabstuk',
	        'masterjs'    	  => $masterjs,
	        'js'          	  => $js,
	        'masterunit'  	  => $id_unit,
	        'script'    	  => 'partial/script',
		    'active_tab'  	  => 'dafdosen'
	    ];

	    $this->load->view('master', $data);
	}

	public function updateDataJabstuk($id_jabatan, $id_pegawai) 
	{
		$this->form_validation->set_rules($this->m_pegawai->getAddJabatanStrukturalValidationRules());

	    if ($this->form_validation->run() == FALSE) {
			$js = $this->m_pegawai->getjabstukById($id_jabatan);
		    $masterjs = $this->m_pegawai->getdatajabatan();
		    $id_unit = $this->m_pegawai->getdataunit();
		    $data = [
				'bootstrap'	      => 'partial/bootstrap',
				'loader'    	  => 'partial/loader',
				'navbar'    	  => 'partial/navbar',
				'sidebar'   	  => 'partial/sidebar',
				'header'    	  => 'partial/header',
		        'content'     	  => 'vjabstuk/editjabstuk',
		        'masterjs'    	  => $masterjs,
		        'js'          	  => $js,
		        'masterunit'  	  => $id_unit,
		        'script'    	  => 'partial/script',
			    'active_tab'  	  => 'dafdosen'
		    ];

		    $this->load->view('master', $data);

	    } else {
	        // Jika validasi berhasil, simpan data ke database
	        
	            // Redirect ke halaman yang diinginkan jika penyisipan berhasil
	            $this->m_pegawai->updateDatajabsuk($id_jabatan);
	            redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	       
	    }
	}

	public function hapusJabstuk($id_pegawai, $id_jabatan)
	{
		$this->m_pegawai->deleteJabstuk($id_jabatan);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}


	//JABATAN FUNGSIONAL
	public function tambahjafung($id) 
	{
	    $peg = $this->m_pegawai->dataPegawai($id);
	    $masterjf = $this->m_pegawai->getdatajafung();
	    $id_unit = $this->m_pegawai->getdataunit();
	    $data = [
			'bootstrap'	      => 'partial/bootstrap',
			'loader'    	  => 'partial/loader',
			'navbar'    	  => 'partial/navbar',
			'sidebar'   	  => 'partial/sidebar',
			'header'    	  => 'partial/header',
	        'content'     	  => 'vjafung/formadd_jafung',
	        'masterjf'    	  => $masterjf,
	        'masterunit'  	  => $id_unit,
	        'peg'         	  => $peg,
	        'script'    	  => 'partial/script',
		    'active_tab'  	  => 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertjafung($id)
	{
	    $this->form_validation->set_rules($this->m_pegawai->getJafungValidationRules());

	    // Run form validation
	    if ($this->form_validation->run() == FALSE) {
	        // Jika validasi gagal, tampilkan kembali formulir dengan pesan kesalahan
	        $peg = $this->m_pegawai->dataPegawai($id);
	        $id_jf = $this->m_pegawai->getdatajafung();
	        $id_unit = $this->m_pegawai->getdataunit();
	        $data = [
	            'bootstrap'	      => 'partial/bootstrap',
				'loader'    	  => 'partial/loader',
				'navbar'    	  => 'partial/navbar',
				'sidebar'   	  => 'partial/sidebar',
				'header'    	  => 'partial/header',
	            'content'     	  => 'vjafung/formadd_jafung',
	            'masterjf'    	  => $id_jf,
	            'masterunit'  	  => $id_unit,
	            'peg'         	  => $peg,
	            'script'    	  => 'partial/script',
		    	'active_tab'  	  => 'dafdosen'
	        ];

	        $this->load->view('master', $data);

	    } else {
	        $insert_result = $this->m_pegawai->insertjafung();

	        if ($insert_result) {
	            // Redirect ke halaman yang diinginkan jika penyisipan berhasil
	            redirect("Cpegawai/c_pegawai/getAllData/{$id}");
	        } else {
	            // Tampilkan pesan kesalahan jika penyisipan gagal (opsional)
	            echo "Gagal menyimpan data ke database.";
	        }
	    }
	}

	public function editjafung($id_jabatan) 
	{
	    $jf = $this->m_pegawai->getjabfungById($id_jabatan);
	    // var_dump($jf); die;
	    $masterjf = $this->m_pegawai->getdatajafung();
	    $id_unit = $this->m_pegawai->getdataunit();
	    $data = [
			'bootstrap'	      => 'partial/bootstrap',
			'loader'    	  => 'partial/loader',
			'navbar'    	  => 'partial/navbar',
			'sidebar'   	  => 'partial/sidebar',
			'header'    	  => 'partial/header',
	        'content'     	  => 'vjafung/edit_jafung',
	        'masterjf'    	  => $masterjf,
	        'jf'          	  => $jf,
	        'masterunit'  	  => $id_unit,
	        'script'    	  => 'partial/script',
		    'active_tab'  	  => 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateDataJafung($id_jabatan, $id_pegawai) 
	{
		$valid = $this->m_pegawai->getJafungValidationRules();
		$this->form_validation->set_rules($valid);

	    // Run form validation
	    if ($this->form_validation->run() == FALSE) {
	        // Jika validasi gagal, tampilkan kembali formulir dengan pesan kesalahan
	        $jf = $this->m_pegawai->getjabfungById($id_jabatan);
		    $masterjf = $this->m_pegawai->getdatajafung();
		    $id_unit = $this->m_pegawai->getdataunit();
		    $data = [
				'bootstrap'	      => 'partial/bootstrap',
				'loader'    	  => 'partial/loader',
				'navbar'    	  => 'partial/navbar',
				'sidebar'   	  => 'partial/sidebar',
				'header'    	  => 'partial/header',
		        'content'     	  => 'vjafung/edit_jafung',
		        'masterjf'    	  => $masterjf,
		        'jf'          	  => $jf,
		        'masterunit'  	  => $id_unit,
		        'script'    	  => 'partial/script',
			    'active_tab'  	  => 'dafdosen'
		    ];
		    $this->load->view('master', $data);
	    } else {
	        $insert_result = $this->m_pegawai->updateDatajafung($id_jabatan);

	        if ($insert_result) {
	            // Redirect ke halaman yang diinginkan jika penyisipan berhasil
	            redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	        } else {
	            // Tampilkan pesan kesalahan jika penyisipan gagal (opsional)
	            echo "Gagal menyimpan data ke database.";
	        }
	    }
	}

	public function hapusJabfung($id_pegawai, $id_jabatan)
	{
		$this->m_pegawai->deleteJabfung($id_jabatan);
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
		$valid = $this->m_pegawai->validasiDikstruk();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
			$peg = $this->m_pegawai->dataPegawai($id);
			$data = [
		      'bootstrap'	  	=> 'partial/bootstrap',
		      'loader'    	  	=> 'partial/loader',
		      'navbar'    	  	=> 'partial/navbar',
		      'sidebar'   	  	=> 'partial/sidebar',
		      'header'    	  	=> 'partial/header',
		      'content'   	  	=> 'Vdikstruk/v_tambahDikstruk',
		      'status_validasi'	=> $status_validasi,
		      'peg'		  	  	=> $peg,
		      'script'    	  	=> 'partial/script',
		      'active_tab'		=> 'dafdosen'
		    ];
		    $this->load->view('master', $data);
		    
		} else {
			$this->m_pegawai->insertDikstruk($id);
			redirect("Cpegawai/c_pegawai/getAllData/{$id}");
		}
	}

	public function editDikstruk($id_diklat)
	{
		$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
		$con = $this->m_pegawai->getDikstrukById($id_diklat);
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
		$valid = $this->m_pegawai->validasiDikstruk();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$status_validasi = [['status' => 'Belum Divalidasi'],['status' => 'Valid'],['status' => 'Tidak Valid']];
			$con = $this->m_pegawai->getDikstrukById($id);
			// var_dump($con); die;
			$data = [
		      'bootstrap' 			=> 'partial/bootstrap',
		      'loader'    			=> 'partial/loader',
		      'navbar'    			=> 'partial/navbar',
		      'sidebar'   			=> 'partial/sidebar',
		      'header'    			=> 'partial/header',
		      'content'   			=> 'Vdikstruk/v_editDikstruk',
		      'status_validasi'		=> $status_validasi,
		      'con'		  			=> $con,
		      'script'    			=> 'partial/script',
		      'active_tab'  		=> 'dafdosen'
		    ];
		    $this->load->view('master', $data);
		} else {
			$this->m_pegawai->updateDataDikstruk($id);
			redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
		}
		
	}

	public function hapusDikstruk($id_pegawai, $id_diklat)
	{
		$this->m_pegawai->deleteDikstruk($id_diklat);
		redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}


	//BAGIAN DIKLAT FUNGSIONAL
	public function tambahDikfung($id)
	{
		$tipe_diklat = [['tipe' => 'Formal'],['tipe' => 'Non-Formal']];
		$peg = $this->m_pegawai->dataPegawai($id);
		$data = [
	      'bootstrap'	  => 'partial/bootstrap',
	      'loader'    	  => 'partial/loader',
	      'navbar'    	  => 'partial/navbar',
	      'sidebar'   	  => 'partial/sidebar',
	      'header'    	  => 'partial/header',
	      'content'   	  => 'Vdikfung/v_tambahDikfung',
	      'peg'		  	  => $peg,
	      'tipe_diklat'	  => $tipe_diklat,
	      'script'    	  => 'partial/script',
	      'active_tab'    => 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}

	public function insertDikfung($id)
	{
		$valid = $this->m_pegawai->validasiDikfung();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$tipe_diklat = [['tipe' => 'Formal'],['tipe' => 'Non-Formal']];
			$peg = $this->m_pegawai->dataPegawai($id);
			$data = [
		      'bootstrap'	  	=> 'partial/bootstrap',
		      'loader'    	  	=> 'partial/loader',
		      'navbar'    	  	=> 'partial/navbar',
		      'sidebar'   	  	=> 'partial/sidebar',
		      'header'    	  	=> 'partial/header',
		      'content'   	  	=> 'Vdikfung/v_tambahdikfung',
		      'tipe_diklat'	  => $tipe_diklat,
		      'peg'		  	  	=> $peg,
		      'script'    	  	=> 'partial/script',
		      'active_tab'		=> 'dafdosen'
		    ];
		    $this->load->view('master', $data);
		    
		} else {
			$this->m_pegawai->insertDikfung($id);
	   		redirect("Cpegawai/c_pegawai/getAllData/{$id}");
		}
		
	}

	public function editDikfung($id_diklat)
	{
		$tipe_diklat = [['tipe' => 'Formal'],['tipe' => 'Non-Formal']];
		$con = $this->m_pegawai->getDikfungById($id_diklat);
		$data = [
	      'bootstrap' 	=> 'partial/bootstrap',
	      'loader'    	=> 'partial/loader',
	      'navbar'    	=> 'partial/navbar',
	      'sidebar'   	=> 'partial/sidebar',
	      'header'    	=> 'partial/header',
	      'content'   	=> 'Vdikfung/v_editdikfung',
	      'con'		  	=> $con,
	      'tipe_diklat'	=> $tipe_diklat,
	      'script'    	=> 'partial/script',
	      'active_tab'  => 'dafdosen'
	    ];
	    $this->load->view('master', $data);
	}

	public function updateDikfung($id, $id_pegawai)
	{
		$valid = $this->m_pegawai->validasiDikfung();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			$tipe_diklat = [['tipe' => 'Formal'],['tipe' => 'Non-Formal']];
			$con = $this->m_pegawai->getDikfungById($id);
			// var_dump($con); die;
			$data = [
		      'bootstrap' 			=> 'partial/bootstrap',
		      'loader'    			=> 'partial/loader',
		      'navbar'    			=> 'partial/navbar',
		      'sidebar'   			=> 'partial/sidebar',
		      'header'    			=> 'partial/header',
		      'content'   			=> 'Vdikfung/v_editdikfung',
		      'tipe_diklat'	  		=> $tipe_diklat,
		      'con'		  			=> $con,
		      'script'    			=> 'partial/script',
		      'active_tab'  		=> 'dafdosen'
		    ];
		    $this->load->view('master', $data);
		} else {
			$this->m_pegawai->updateDataDikfung($id);
			redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
		}
		
	}

	public function hapusDikfung($id_pegawai, $id_diklat)
	{
   		$this->m_pegawai->deleteDikfung($id_diklat);
    	redirect("Cpegawai/c_pegawai/getAllData/{$id_pegawai}");
	}



}

/* End of file c_pegawai.php */
/* Location: ./application/controllers/c_pegawai.php */