<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_dafdosen extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mdafdosen/m_dafdosen');
  }

  public function index()
  {
    $isi = $this->m_dafdosen->getPegawai();
    $data = [
      'bootstrap' => 'partial/bootstrap',
      'loader'    => 'partial/loader',
      'navbar'    => 'partial/navbar',
      'sidebar'   => 'partial/sidebar',
      'header'    => 'partial/header',
      'content'   => 'Vdafdosen/v_dafdosen',
      'isi'       => $isi,
      'script'    => 'partial/script',
      'active_tab' => 'dafdosen'
    ];
    $this->load->view('master', $data);
  }

  public function tambahDosen()
  {
    $gender = [['nama_gender' => 'Laki-Laki'],['nama_gender' => 'Perempuan']];
    $data = [
      'bootstrap' => 'partial/bootstrap',
      'loader'    => 'partial/loader',
      'navbar'    => 'partial/navbar',
      'sidebar'   => 'partial/sidebar',
      'header'    => 'partial/header',
      'gender'    => $gender,
      'content'   => 'Vdafdosen/v_insertdosen',
      'script'    => 'partial/script',
      'active_tab' => 'dafdosen'
    ];
    $this->load->view('master', $data);
  }

  public function insertDosen()
  {
    $valid = $this->m_dafdosen->validasiDafdosen();
    $this->form_validation->set_rules($valid);

    $gender = [['nama_gender' => 'Laki-Laki'],['nama_gender' => 'Perempuan']];
    if ($this->form_validation->run() == FALSE) {
        $data = [
        'bootstrap' => 'partial/bootstrap',
        'loader'    => 'partial/loader',
        'navbar'    => 'partial/navbar',
        'sidebar'   => 'partial/sidebar',
        'header'    => 'partial/header',
        'gender'    => $gender,
        'content'   => 'Vdafdosen/v_insertdosen',
        'script'    => 'partial/script',
        'active_tab' => 'dafdosen'
      ];
      $this->load->view('master', $data);

    } else {
      $this->m_dafdosen->insertPegawai();
      redirect('Cdafdosen/c_dafdosen');
    }
  }

  public function editPegawai($id_pegawai)
  {
        $id = $this->m_dafdosen->getId($id_pegawai);
        if ($id) {
            redirect('Cpegawai/c_pegawai/getAllData/' . $id);
        } else {
            echo "ID pegawai tidak ditemukan.";
        }
  }

  public function hapusPegawai($id)
  {
    $this->m_dafdosen->deletePegawai($id);
    redirect('Cdafdosen/c_dafdosen');
  }

  public function pencarian()
  {
    if ($this->input->post('submit')) {
        $keyword = $this->input->post('keyword');
        $result = $this->m_dafdosen->searchPegawai($keyword);

        $data = [
          'bootstrap' => 'partial/bootstrap',
          'loader'    => 'partial/loader',
          'navbar'    => 'partial/navbar',
          'sidebar'   => 'partial/sidebar',
          'header'    => 'partial/header',
          'content'   => 'Vdafdosen/v_dafdosen',
          'isi'       => $result, // Pass the search result to the view
          'script'    => 'partial/script',
          'active_tab' => 'dafdosen'
        ];

        $this->load->view('master', $data);
    }
  }

  public function print()
  {
    $data['dafdos']=$this->m_dafdosen->getPegawai("pegawai")->result();
    $this->load->view('output/print',$data);
    ;
  }

}

/* End of file c_dashboard.php */
/* Location: ./application/controllers/c_dashboard.php */