<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_masterunit extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getUnit() //untuk nampilin semua data
	{
		$result = $this->db->get('master_unit');
		return $result;
	}

	public function detailUnit($id)
	{
		$this->db->where('id_unit', $id);
		$hasil = $this->db->get('master_unit')->result_array();
		return $hasil[0];
	}

	public function insertUnit()
	{
		$unit = array('nama_unit' => $this->input->post('nama_unit'));
		$this->db->insert('master_unit', $unit);
	}

	public function editUnit($id)
	{
		$unit = array('nama_unit' => $this->input->post('nama_unit'));
		$this->db->where('id_unit', $id);
		$this->db->update('master_unit', $unit);
	}

	public function deleteUnit($id)
	{
		$this->db->where('id_unit', $id);
		$del = $this->db->delete('master_unit');
		return $del;
	}

	public function validasiUnit()
	{
		return [
			[
				'field'  => 'nama_unit',
				'label'  => 'Nama Unit',
				'rules'  => 'required|max_length[45]',
				'errors' => array(
					'required'   => '%s tidak boleh kosong!',
					'max_length' => '%s tidak boleh lebih dari 45 karakter!',
				),
			],
		];
	}

}

/* End of file m_masterunit.php */
/* Location: ./application/models/m_masterunit.php */