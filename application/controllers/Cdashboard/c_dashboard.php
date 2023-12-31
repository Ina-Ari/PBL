<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_dashboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = [
      'bootstrap'   => 'partial/bootstrap',
      'navbar'      => 'partial/navbar',
      'sidebar'     => 'partial/sidebar',
      'footer'      => 'partial/footer',
      'content'     => 'Vdasboard/v_dashboard',
      'script'      => 'partial/script',
      'active_tab'  => 'dashboard'
    ];
    $this->load->view('master', $data);
  }

}

/* End of file c_dashboard.php */
/* Location: ./application/controllers/c_dashboard.php */