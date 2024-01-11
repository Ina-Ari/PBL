<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_masterjabfung extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getMasterJabFung() //untuk nampilin semua data
	{
		$result = $this->db->get('master_jabatan_fung');
		return $result;
	}

	public function detailMasterJabFung($id)
	{
		$this->db->where('id_jf', $id);
		$hasil = $this->db->get('master_jabatan_fung')->result_array();
		return $hasil[0];
	}

	public function insertMasterJabFung()
	{
		$masterjabfung = array('nama_jf' => $this->input->post('nama_jf'));
		$this->db->insert('master_jabatan_fung', $masterjabfung);
	}

	public function editMasterJabFung($id)
	{
		$masterjabfung = array('nama_jf' => $this->input->post('nama_jf'));
		$this->db->where('id_jf', $id);
		$this->db->update('master_jabatan_fung', $masterjabfung);
	}

	public function deleteMasterJabFung($id)
	{
		$this->db->where('id_jf', $id);
		$del = $this->db->delete('master_jabatan_fung');
		return $del;
	}

	public function validasiMasterJabFung()
	{
		return [
			[
				'field'  => 'nama_jf',
				'label'  => 'Nama Jabatan Fungsional',
				'rules'  => 'required|max_length[45]',
				'errors' => array(
					'required'   => '%s tidak boleh kosong!',
					'max_length' => '%s tidak boleh lebih dari 45 karakter!',
				),
			],
		];
	}

}

/* End of file m_masterjabfung.php */
/* Location: ./application/models/m_masterjabfung.php */