<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_dafdosen extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertPegawai()
	{
		$config['upload_path'] = './assets/images/pegawai';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
		
		if ( !$this->upload->do_upload('foto')){
			echo "Gagal Insert Data"; die();
		}
		else{
			$data = array('upload_data' => $this->upload->data());

			$data_foto = $data['upload_data']['file_name'];
			
			$peg = array(
				'nama_pegawai' => $this->input->post('nama_pegawai'),
				'nip' => $this->input->post('nip'),
				'nidn' => $this->input->post('nidn'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'no_kartupegawai' => $this->input->post('no_kartupegawai'),
				'foto' => 'assets/images/pegawai/' . $data_foto
			);

			$hasil = $this->db->insert('pegawai', $peg);
			return $hasil;
		}

	}

	public function getPegawai()
	{
		$this->db->join('master_jabatan_fung', 'pegawai.jabatan_fungsional = master_jabatan_fung.id_jf','left');
		$this->db->join('master_unit', 'pegawai.jabatan_fungsional = master_unit.id_unit','left');
        $this->db->join('master_pendidikan', 'pegawai.pendidikan = master_pendidikan.id_tingpen','left');

		$result = $this->db->get('pegawai');
		return $result;
	}

	public function getId($id_pegawai)
	{
		$query = $this->db->get_where('pegawai', array('id_pegawai' => $id_pegawai));
        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->id_pegawai;
        } else {
            return null;
        }
	}
	
	public function detailPegawai($id)
	{
		$this->db->where('id_pegawai', $id);
		$hasil = $this->db->get('pegawai');
		return $hasil->row();
	}

	public function deletePegawai($id)
	{
		$this->db->where('id_pegawai', $id);
		$hasil = $this->db->delete('pegawai');
		return $hasil;
	}
	public function searchPegawai($keyword)
	{
		$this->db->join('master_jabatan_fung', 'pegawai.jabatan_fungsional = master_jabatan_fung.id_jf','left');
        $this->db->join('master_pendidikan', 'pegawai.pendidikan = master_pendidikan.id_tingpen','left');
        $this->db->join('master_unit', 'pegawai.jabatan_fungsional = master_unit.id_unit','left');
		$this->db->like('nama_pegawai', $keyword);
		$this->db->or_like('nip', $keyword);
		$result = $this->db->get('pegawai');
		return $result;
	}

}

/* End of file m_dashboard.php */
/* Location: ./application/models/m_dashboard.php */