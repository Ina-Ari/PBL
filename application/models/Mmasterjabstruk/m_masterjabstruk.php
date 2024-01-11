<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_masterjabstruk extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getMasterJabStruk() //untuk nampilin semua data
	{
		$result = $this->db->get('master_jabatan_struktural');
		return $result;
	}

	public function detailMasterJabStruk($id)
	{
		$this->db->where('id_js', $id);
		$hasil = $this->db->get('master_jabatan_struktural')->result_array();
		return $hasil[0];
	}

	public function insertMasterJabStruk()
	{
		$masterjabfstruk = array('nama_js' => $this->input->post('nama_js'));
		$this->db->insert('master_jabatan_struktural', $masterjabfstruk);
	}

	public function editMasterJabStruk($id)
	{
		$masterjabfstruk = array('nama_js' => $this->input->post('nama_js'));
		$this->db->where('id_js', $id);
		$this->db->update('master_jabatan_struktural', $masterjabfstruk);
	}

	public function deleteMasterJabStruk($id)
	{
		$this->db->where('id_js', $id);
		$del = $this->db->delete('master_jabatan_struktural');
		return $del;
	}

	public function validasiMasterJabStruk()
	{
		return [
			[
				'field'  => 'nama_js',
				'label'  => 'Nama Jabatan Struktural',
				'rules'  => 'required|max_length[45]',
				'errors' => array(
					'required'   => '%s tidak boleh kosong!',
					'max_length' => '%s tidak boleh lebih dari 45 karakter!',
				),
			],
		];
	}

}

/* End of file m_masterjabstruk.php */
/* Location: ./application/models/m_masterjabstruk.php */