<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_pegawai extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	// DATA UTAMA
	public function updateDataUtama($id)
	{
		$config['upload_path']   = './assets/images/pegawai';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
			
		$peg = array(
			'nama_pegawai' 	  => $this->input->post('nama_pegawai'),
			'nip' 			  => $this->input->post('nip'),
			'nidn' 			  => $this->input->post('nidn'),
			'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
			'no_kartupegawai' => $this->input->post('no_kartupegawai'),
		);

		if ($this->upload->do_upload('foto')) {
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$peg['foto'] = 'assets/images/pegawai/' . $data_foto;
		}

		$this->db->where('id_pegawai', $id);
		$hasil = $this->db->update('pegawai', $peg);
		return $hasil;
	}

	public function dataPegawai($id)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('pegawai.id_pegawai', $id);
		$result = $this->db->get();
		$isi = $result->result_array();
		return $isi;
	}


	// PENDIDIKAN
	public function dataPendidikanPegawai($id)
	{
		$this->db->select('*');
		$this->db->from('pendidikan');
		$this->db->where('pendidikan.id_pegawai', $id);
		$this->db->join('pegawai', 'pendidikan.id_pegawai = pegawai.id_pegawai', 'left');
		$this->db->join('master_pendidikan', 'pendidikan.id_tingpen = master_pendidikan.id_tingpen', 'left');
		$result = $this->db->get();
		$isi = $result->result_array();
		// var_dump($isi);die;
		return $isi;
	}

	public function getPendidikanById($id_pendidikan)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('pendidikan.id_pendidikan', $id_pendidikan);
		$this->db->join('pendidikan', 'pegawai.id_pegawai = pendidikan.id_pegawai', 'left');
		$this->db->join('master_pendidikan', 'pendidikan.id_tingpen = master_pendidikan.id_tingpen', 'left');
		$result = $this->db->get();
		$isi = $result->row_array();
		return $isi;
	}
	
	public function insertPendidikan()
	{
		$config['upload_path'] 	 = './assets/images/pendidikan';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
		
		$pen = array(
			'id_tingpen' 	=> $this->input->post('id_tingpen'),
			'nama_sekolah' 	 => $this->input->post('nama_sekolah'), 
			'tanggal_lulus'  => $this->input->post('tanggal_lulus'), 
			'no_ijazah' 	 => $this->input->post('no_ijazah'), 
			'jurusan' 		 => $this->input->post('jurusan'), 
			'gelar_depan' 	 => $this->input->post('gelar_depan'), 
			'gelar_belakang' => $this->input->post('gelar_belakang'), 
			'id_pegawai' 	 => $this->input->post('id_pegawai'),
			'status_validasi'=> $this->input->post('status_validasi')

		);

		if ($this->upload->do_upload('file_ijazah')) {
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$pen['file_ijazah'] = 'assets/images/pendidikan/' . $data_foto;
		}

		$hasil = $this->db->insert('pendidikan', $pen);
		return $hasil;
	}

	public function updateDataPendidikan($id)
	{
		$config['upload_path'] = './assets/images/pendidikan';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
			
		$pen = array(
			'id_tingpen' 	 => $this->input->post('id_tingpen'), 
			'nama_sekolah' 	 => $this->input->post('nama_sekolah'), 
			'tanggal_lulus'  => $this->input->post('tanggal_lulus'), 
			'no_ijazah' 	 => $this->input->post('no_ijazah'), 
			'jurusan' 		 => $this->input->post('jurusan'), 
			'gelar_depan' 	 => $this->input->post('gelar_depan'), 
			'gelar_belakang' => $this->input->post('gelar_belakang'), 
			'id_pegawai' 	 => $this->input->post('id_pegawai'),
			'status_validasi'=> $this->input->post('status_validasi')
		);

		if ($this->upload->do_upload('file_ijazah')) {
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$pen['file_ijazah'] = 'assets/images/pendidikan/' . $data_foto;
		}

		// $this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_pendidikan', $id);
		$hasil = $this->db->update('pendidikan', $pen);
		return $hasil;
	}

	public function getTingPen()
	{
		$hasil = $this->db->get('master_pendidikan')->result_array();
		return $hasil;
	}

	public function deletePendidikan($id)
	{
		// $this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_pendidikan', $id);
		$hasil = $this->db->delete('pendidikan');
		return $hasil;
	}


	//BAGIAN GOLONGAN
	public function dataGolonganPegawai($id)
	{
		$this->db->select('*');
		$this->db->from('golongan');
		$this->db->where('golongan.id_pegawai', $id);
		$this->db->join('pegawai', 'golongan.id_pegawai = pegawai.id_pegawai', 'left');
		$this->db->join('master_golongan', 'golongan.id_jenis_golongan = master_golongan.id_jenis_golongan', 'left');
		$result = $this->db->get();
		$isi = $result->result_array();
		// var_dump($isi);die;
		return $isi;
	}

	public function getGolonganById($id_golongan)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('golongan.id_golongan', $id_golongan);
		$this->db->join('golongan', 'pegawai.id_pegawai = golongan.id_pegawai', 'left');
		$this->db->join('master_golongan', 'golongan.id_jenis_golongan = master_golongan.id_jenis_golongan', 'left');
		$result = $this->db->get();
		$isi = $result->row_array();
		// $data = [];
		// for ($i=0; $i < count($isi); $i++) { 
		// 	if ($id_golongan == $isi[$i]['id_golongan']) {
		// 		$data = $isi[$i];
		// 	}
		// }
		// var_dump($data);die;
		return $isi;
	}

	public function insertGolongan()
	{
		$config['upload_path'] 	 = './assets/images/golongan';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
		
		$gol = array(
				'id_jenis_golongan' => $this->input->post('id_jenis_golongan'), 
				'lama_tahun'		=> $this->input->post('lama_tahun'), 
				'lama_bulan' 		=> $this->input->post('lama_bulan'), 
				'tmt_golongan' 		=> $this->input->post('tmt_golongan'), 
				'tanggal_sk' 		=> $this->input->post('tanggal_sk'), 
				'nomor_sk' 			=> $this->input->post('nomor_sk'), 
				'tanggal_bkn' 		=> $this->input->post('tanggal_bkn'), 
				'nomor_bkn' 		=> $this->input->post('nomor_bkn'),
				'jenis_kp' 			=> $this->input->post('jenis_kp'),
				'id_pegawai' 		=> $this->input->post('id_pegawai'),
				'status_validasi'	=> $this->input->post('status_validasi')
			);

		if ($this->upload->do_upload('file_sk')){
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$gol['file_sk'] = 'assets/images/golongan/' . $data_foto;
		}
		
		$hasil = $this->db->insert('golongan', $gol);
		return $hasil;
		
	}

	public function updateDataGolongan($id)
	{
		$config['upload_path'] 	 = './assets/images/golongan';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
		
		$gol = array(
				'id_jenis_golongan' => $this->input->post('id_jenis_golongan'), 
				'lama_tahun'		=> $this->input->post('lama_tahun'), 
				'lama_bulan' 		=> $this->input->post('lama_bulan'), 
				'tmt_golongan' 		=> $this->input->post('tmt_golongan'), 
				'tanggal_sk' 		=> $this->input->post('tanggal_sk'), 
				'nomor_sk' 			=> $this->input->post('nomor_sk'), 
				'tanggal_bkn' 		=> $this->input->post('tanggal_bkn'), 
				'nomor_bkn' 		=> $this->input->post('nomor_bkn'),
				'jenis_kp' 			=> $this->input->post('jenis_kp'),
				'id_pegawai' 		=> $this->input->post('id_pegawai'),
				'status_validasi'=> $this->input->post('status_validasi')
			);

		if ($this->upload->do_upload('file_sk')){
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$gol['file_sk'] = 'assets/images/golongan/' . $data_foto;
		}

		// $this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_golongan', $id);
		$hasil = $this->db->update('golongan', $gol);
		return $hasil;
	}

	public function getMasterGol()
	{
		$hasil = $this->db->get('master_golongan')->result_array();
		return $hasil;
	}

	public function deleteGolongan($id)
	{
		// $this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_golongan', $id);
		$hasil = $this->db->delete('golongan');
		return $hasil;
	}


	//BAGIAN JABATAN STRUKTURAL
	public function datajabstuk($id) 
	{
        $this->db->select('*');
        $this->db->from('jabatan_struktural');
        $this->db->where('jabatan_struktural.id_pegawai', $id);
        $this->db->join('pegawai', 'jabatan_struktural.id_pegawai = pegawai.id_pegawai', 'left');
        $this->db->join('master_jabatan_struktural', 'jabatan_struktural.id_js = master_jabatan_struktural.id_js', 'left');
        $this->db->join('master_unit', 'jabatan_struktural.id_unit = master_unit.id_unit', 'left');
        $result = $this->db->get();
        return $result->result_array();
    }

    public function getjabstukById($id_jabatan) 
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->where('jabatan_struktural.id_jabatan', $id_jabatan);
        $this->db->join('jabatan_struktural', 'pegawai.id_pegawai = jabatan_struktural.id_pegawai', 'left');
        $this->db->join('master_jabatan_struktural', 'jabatan_struktural.id_js = master_jabatan_struktural.id_js', 'left');
        $this->db->join('master_unit', 'jabatan_struktural.id_unit = master_unit.id_unit', 'left');
        $result = $this->db->get();
        $isi = $result->row_array();
        
        // foreach ($isi as $item) {
        //     if ($id_jabatan == $item['id_jabatan']) {
        //         return $item;
        //     }
        // }
        return $isi;
    }

    public function getdatajabatan()
	{
		$result=$this->db->get('master_jabatan_struktural');
		$jabatan = $result->result_array();
		return $jabatan;
	}

	public function insertjabstuk()
	{
		$js = array(
			'id_js'          	  => $this->input->post('id_js'),
			'id_pegawai'          => $this->input->post('id_pegawai'),
			'tanggal_mulai_js'    => $this->input->post('tanggal_mulai_js'),
			'tanggal_sk'          => $this->input->post('tanggal_sk'),
			'eselon'              => $this->input->post('eselon'),
			'tanggal_selesai_js'  => $this->input->post('tanggal_selesai_js'),
			'id_unit'             => $this->input->post('id_unit')
		);
	
		$hasil = $this->db->insert('jabatan_struktural', $js);
		return $hasil;
	}

	public function updateDatajabsuk($id_jabatan)
	{
		$data = array(
			'id_js'             => $this->input->post('id_js'),
			'tanggal_mulai_js'  => $this->input->post('tanggal_mulai_js'),
			'tanggal_sk'        => $this->input->post('tanggal_sk'),
			'eselon'            => $this->input->post('eselon'),
			'tanggal_selesai_js'=> $this->input->post('tanggal_selesai_js'),
			'id_unit'           => $this->input->post('id_unit')
		);
	
		// $this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_jabatan', $id_jabatan);
		$this->db->update('jabatan_struktural', $data);
	}

	public function deleteJabstuk($id_jabatan)
	{
	    // $this->db->where('id_pegawai', $id_pegawai);
	    $this->db->where('id_jabatan', $id_jabatan);
	    $result = $this->db->delete('jabatan_struktural');
	}

	public function getdataunit()
	{
		$result=$this->db->get('master_unit');
		$unit=$result->result_array();
		return $unit;
	}

	//BAGIAN JABATAN FUNGSIONAL
	public function datajafung($id) 
	{
	
	    $this->db->select('*');
	    $this->db->from('jabatan_fungsional');
	    $this->db->where('jabatan_fungsional.id_pegawai', $id);
	    $this->db->join('pegawai', 'jabatan_fungsional.id_pegawai = pegawai.id_pegawai ', 'left');
	    $this->db->join('master_jabatan_fung', 'jabatan_fungsional.id_jf = master_jabatan_fung.id_jf', 'left');
	    $this->db->join('master_unit', 'jabatan_fungsional.id_unit = master_unit.id_unit', 'left');
	    $result = $this->db->get();
	    return $result->result_array();
	}

	public function getjabfungById($id_jabatan) 
	{
	    $this->db->select('*');
	    $this->db->from('pegawai');
	    $this->db->where('jabatan_fungsional.id_jabatan', $id_jabatan);
	    $this->db->join('jabatan_fungsional', 'pegawai.id_pegawai = jabatan_fungsional.id_pegawai', 'left');
	    $this->db->join('master_jabatan_fung', 'jabatan_fungsional.id_jf = master_jabatan_fung.id_jf', 'left');
	    $this->db->join('master_unit', 'jabatan_fungsional.id_unit = master_unit.id_unit', 'left');
	    $result = $this->db->get();
	    $isi = $result->row_array();
	    
	    // foreach ($isi as $item) {
	    //     if ($id_jabatan == $item['id_jabatan']) {
	    //         return $item;
	    //     }
	    // }
	    return $isi;
	}

	public function getdatajafung()
	{
		$result=$this->db->get('master_jabatan_fung');
		$jabatan = $result->result_array();
		return $jabatan;
	}

	public function insertjafung()
	{
		$jf = array(
			'id_pegawai'          => $this->input->post('id_pegawai'),
			'id_jf'               => $this->input->post('id_jf'),
			'no_sk'               => $this->input->post('no_sk'),
			'tanggal_sk'          => $this->input->post('tanggal_sk'),
			'tanggal_mulai_jf'    => $this->input->post('tanggal_mulai_jf'),
			'id_unit'             => $this->input->post('id_unit')
		);
	
		// Insert data into the 'jabatan_fungsional' table
		$hasil = $this->db->insert('jabatan_fungsional', $jf);
		return $hasil;
	}

	public function updateDatajafung($id_jabatan)
	{
		$data = array(
			'id_jf'               => $this->input->post('id_jf'),
			'no_sk'               => $this->input->post('no_sk'),
			'tanggal_sk'          => $this->input->post('tanggal_sk'),
			'tanggal_mulai_jf'    => $this->input->post('tanggal_mulai_jf'),
			'id_unit'             => $this->input->post('id_unit')
		);
	
		// $this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_jabatan', $id_jabatan);
		$hasil = $this->db->update('jabatan_fungsional', $data);
		return $hasil;
	}

	public function deleteJabfung($id_jabatan)
	{
	    // $this->db->where('id_pegawai', $id_pegawai);
	    $this->db->where('id_jabatan', $id_jabatan);
	    $result = $this->db->delete('jabatan_fungsional');
	}
	

	//BAGIAN DIKLAT STRUKTURAL
	public function dataDikstrukPegawai($id)
	{
		$this->db->select('*');
		$this->db->from('diklat_struktural');
		$this->db->where('diklat_struktural.id_pegawai', $id);
		$this->db->join('pegawai', 'diklat_struktural.id_pegawai = pegawai.id_pegawai', 'left');
		$result = $this->db->get();
		$isi = $result->result_array();
		// var_dump($isi);die;
		return $isi;
	}

	public function getDikstrukById($id_diklat)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('diklat_struktural.id_diklat', $id_diklat);
		$this->db->join('diklat_struktural', 'pegawai.id_pegawai = diklat_struktural.id_pegawai', 'left');
		$result = $this->db->get();
		$isi = $result->row_array();
		// $data = [];
		// for ($i=0; $i < count($isi); $i++) { 
		// 	if ($id_diklat == $isi[$i]['id_diklat']) {
		// 		$data = $isi[$i];
		// 	}
		// }
		// // var_dump($data);die;
		return $isi;
	}

	public function insertDikstruk()
	{
		$config['upload_path'] 	 = './assets/images/DiklatStruktural';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
		
		$dikstruk = array(
			'nama_diklat' 	 => $this->input->post('nama_diklat'), 
			'lokasi_diklat'  => $this->input->post('lokasi_diklat'), 
			'tanggal_mulai'  => $this->input->post('tanggal_mulai'), 
			'tanggal_selesai'=> $this->input->post('tanggal_selesai'), 
			'id_pegawai' 	 => $this->input->post('id_pegawai'),
			'status_validasi'=> $this->input->post('status_validasi')
		);

		if ($this->upload->do_upload('berkas_validasi')) {
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$dikstruk['berkas_validasi'] = 'assets/images/DiklatStruktural/' . $data_foto;
		}

		$hasil = $this->db->insert('diklat_struktural', $dikstruk);
		return $hasil;
	
	}

	public function updateDataDikstruk($id)
	{
		$config['upload_path'] = './assets/images/DiklatStruktural';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
			
		$dikstruk = array(
			'nama_diklat' 	 => $this->input->post('nama_diklat'), 
			'lokasi_diklat'  => $this->input->post('lokasi_diklat'), 
			'tanggal_mulai'  => $this->input->post('tanggal_mulai'), 
			'tanggal_selesai'=> $this->input->post('tanggal_selesai'), 
			'id_pegawai' 	 => $this->input->post('id_pegawai'),
			'status_validasi'=> $this->input->post('status_validasi')
		);
		
		if ($this->upload->do_upload('berkas_validasi')) {
			$data = array('upload_data' => $this->upload->data());
			$data_foto = $data['upload_data']['file_name'];
			$dikstruk['berkas_validasi'] = 'assets/images/DiklatStruktural/' . $data_foto;
		}

		// $this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_diklat', $id);
		$this->db->update('diklat_struktural', $dikstruk);
	}
	
	public function deleteDikstruk($id)
	{
		// $this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_diklat', $id);
		$hasil = $this->db->delete('diklat_struktural');
		return $hasil;
	}


	//BAGIAN DIKLAT FUNGSIONAL
	public function dataDikfungPegawai($id)
	{
		$this->db->select('*');
		$this->db->from('diklat_fungsional');
		$this->db->where('diklat_fungsional.id_pegawai', $id);
		$this->db->join('pegawai', 'diklat_fungsional.id_pegawai = pegawai.id_pegawai', 'left');
		$result = $this->db->get();
		$isi = $result->result_array();
		// var_dump($isi);die;
		return $isi;
	}

	public function getDikfungById($id_diklat)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('diklat_fungsional.id_diklat', $id_diklat);
		$this->db->join('diklat_fungsional', 'pegawai.id_pegawai = diklat_fungsional.id_pegawai', 'left');
		$result = $this->db->get();
		$isi = $result->row_array();
		// $data = [];
		// for ($i=0; $i < count($isi); $i++) { 
		// 	if ($id_diklat == $isi[$i]['id_diklat']) {
		// 		$data = $isi[$i];
		// 	}
		// }
		// var_dump($data);die;
		return $isi;
	}

	public function insertDikfung()
	{	
		$dikfung = array(
			'nama_diklat' 	 => $this->input->post('nama_diklat'), 
			'tipe_diklat'  	 => $this->input->post('tipe_diklat'), 
			'jenis_diklat'   => $this->input->post('jenis_diklat'),
			'tanggal_diklat' => $this->input->post('tanggal_diklat'), 
			'no_sertifikat'  => $this->input->post('no_sertifikat'),
			'penyelenggara'  => $this->input->post('penyelenggara'),
			'instansi'  	 => $this->input->post('instansi'),
			'id_pegawai' 	 => $this->input->post('id_pegawai')
		);

		$hasil = $this->db->insert('diklat_fungsional', $dikfung);
		return $hasil;
	
	}

	public function updateDataDikfung($id)
	{		
		$dikfung = array(
			'nama_diklat' 	 => $this->input->post('nama_diklat'), 
			'tipe_diklat'  	 => $this->input->post('tipe_diklat'), 
			'jenis_diklat'   => $this->input->post('jenis_diklat'),
			'tanggal_diklat' => $this->input->post('tanggal_diklat'), 
			'no_sertifikat'  => $this->input->post('no_sertifikat'),
			'penyelenggara'  => $this->input->post('penyelenggara'),
			'instansi'  	 => $this->input->post('instansi'),
			'id_pegawai' 	 => $this->input->post('id_pegawai')
		);

		// $this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_diklat', $id);
		$this->db->update('diklat_fungsional', $dikfung);

	}

	public function deleteDikfung($id_diklat)
	{
		// $this->db->where('id_pegawai', $id_pegawai);
		$this->db->where('id_diklat', $id_diklat);
		$this->db->delete('diklat_fungsional');
	}


	//FORM VALIDATION
	public function validasiPendidikan()
	{
		return [
			[
				'field' => 'id_tingpen',
				'label' => 'Tingkat Pendidikan',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'nama_sekolah',
				'label' => 'Nama Sekolah',
				'rules' => 'required|max_length[70]',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'tanggal_lulus',
				'label' => 'Tanggal Lulus',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'no_ijazah',
				'label' => 'No Ijazah',
				'rules' => 'max_length[15]',
				'errors' => array(
					'max_length' => '%s tidak boleh lebih dari 15 karakter!',
				),
			],
			[
				'field' => 'jurusan',
				'label' => 'Jurusan',
				'rules' => 'max_length[45]',
				'errors' => array(
					'max_length' => '%s tidak boleh lebih dari 15 karakter!',
				),
			],
			[
				'field' => 'gelar_depan',
				'label' => 'Gelar Depan',
				'rules' => 'max_length[15]',
				'errors' => array(
					'max_length' => '%s tidak boleh lebih dari 15 karakter!',
				),
			],
			[
				'field' => 'gelar_belakang',
				'label' => 'Gelar Belakang',
				'rules' => 'max_length[20]',
				'errors' => array(
					'max_length' => '%s tidak boleh lebih dari 20 karakter!',
				),
			],
		];
	}

	public function validasiGolongan()
	{
		return [
			[
				'field' => 'id_jenis_golongan',
				'label' => 'Golongan',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'lama_tahun',
				'label' => 'Lama Tahun',
				'rules' => 'required|is_natural',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
					'is_natural' => '%s hanya boleh diisi angka bernilai bulat!'
				),
			],
			[
				'field' => 'lama_bulan',
				'label' => 'Lama Bulan',
				'rules' => 'required|is_natural',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
					'is_natural' => '%s hanya boleh diisi angka bernilai bulat!'
				),
			],
			[
				'field' => 'tmt_golongan',
				'label' => 'Tanggal Mulai Tugas',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'tanggal_sk',
				'label' => 'Tanggal SK',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'nomor_sk',
				'label' => 'Nomor SK',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			// [
			// 	'field' => 'tanggal_bkn',
			// 	'label' => 'Tanggal BKN',
			// 	'rules' => 'required',
			// 	'errors' => array(
			// 		'required' => '%s tidak boleh kosong!',
			// 	),
			// ],
			// [
			// 	'field' => 'nomor_bkn',
			// 	'label' => 'Nomor BKNN',
			// 	'rules' => 'max_length[20]',
			// 	'errors' => array(
			// 		'max_length' => '%s tidak boleh lebih dari 20 karakter!',
			// 	),
			// ],
			[
				'field' => 'jenis_kp',
				'label' => 'Jenis KP',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
		];
	}

	public function validasiDikstruk()
	{
		return [
			[
				'field' => 'nama_diklat',
				'label' => 'Nama Diklat',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'lokasi_diklat',
				'label' => 'Lokasi Diklat',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'tanggal_mulai',
				'label' => 'Tanggal Mulai',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'tanggal_selesai',
				'label' => 'Tanggal Selesai',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
		];
	}

	public function validasiDikfung()
	{
		return [
			[
				'field' => 'nama_diklat',
				'label' => 'Nama Diklat',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'tipe_diklat',
				'label' => 'Tipe Diklat',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'jenis_diklat',
				'label' => 'Jenis Diklat',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'tanggal_diklat',
				'label' => 'Tanggal Diklat',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'no_sertifikat',
				'label' => 'No Sertifikat',
				'rules' => 'max_length[45]',
				'errors' => array(
					'max_length' => '%s tidak boleh lebih dari 45 karakter!',
				),
			],
			[
				'field' => 'penyelenggara',
				'label' => 'Penyelenggara',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
			[
				'field' => 'instansi',
				'label' => 'Instansi',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong!',
				),
			],
		];
	}

	public function getAddJabatanStrukturalValidationRules()
	{
		return [
			[
				'field' => 'id_js',
				'label' => 'Nama Jabatan',
				'rules' => 'required',
				'errors' =>array('required'=>'%s masih kosong',),
			],
			// [
			// 	'field' => 'no_sk',
			// 	'label' => 'No. SK',
			// 	'rules' => 'required',
			// 	'errors' =>array('required'=>'%s masih kosong',),
			// ],
			[
				'field' => 'tanggal_sk',
				'label' => 'Tanggal SK',
				'rules' => 'required',
				'errors' =>array('required'=>'%s masih kosong',),
			],
			[
				'field' => 'tanggal_mulai_js',
				'label' => 'Tanggal Mulai',
				'rules' => 'required',
				'errors' =>array('required'=>'%s masih kosong',),
			],
			[
				'field' => 'tanggal_selesai_js',
				'label' => 'Tanggal Selesai',
				'rules' => 'required',
				'errors' =>array('required'=>'%s masih kosong',),
			],
			[
				'field' => 'eselon',
				'label' => 'eselon',
				'rules' => 'required|in_list[I,II,III,IV,V]',
				'errors' => array('required' => '%s masih kosong', 'in_list' => 'Invalid %s selected'),
			],
			[
				'field' => 'id_unit',
				'label' => 'Unit Organisasi',
				'rules' => 'required',
				'errors' =>array('required'=>'%s masih kosong',),
			],
		];
	}

	public function getJafungValidationRules()
	{
		return [
			[
				'field' => 'id_jf',
				'label' => 'Nama Jabatan',
				'rules' => 'required',
				'errors' =>array('required'=>'%s masih kosong',),
			],
			[
				'field' => 'no_sk',
				'label' => 'Nomor SK',
				'rules' => 'required',
				'errors' =>array('required'=>'%s masih kosong',),
			],
			[
				'field' => 'tanggal_sk',
				'label' => 'Tanggal SK',
				'rules' => 'required',
				'errors' =>array('required'=>'%s masih kosong',),
			],
			[
				'field' => 'tanggal_mulai_jf',
				'label' => 'Tanggal Mulai',
				'rules' => 'required',
				'errors' =>array('required'=>'%s masih kosong',),
			],
			[
				'field' => 'id_unit',
				'label' => 'Unit Organisasi',
				'rules' => 'required',
				'errors' =>array('required'=>'%s masih kosong',),
			],
			// ... tambahkan aturan validasi lainnya sesuai kebutuhan
		];
	}

}

/* End of file m_pegawai.php */
/* Location: ./application/models/m_pegawai.php */