<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itc extends User_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model(array('Model_article', 'Model_message'));
    $this->load->helper(array('url', 'download'));
    
  }

  function index(){
    //error handling
    $data = array();
    if(!empty($this->session->flashdata('error')))
    {
      $data['error'] = $this->session->flashdata('error');
    }
    else if(!empty($this->session->flashdata('message')))
    {
      $data['message'] = $this->session->flashdata('message');
    }

    $data['article_footer']   = $this->Model_article->select_all(4);
    // load data
    $data['content'] = $this->load->view('itc', $data, TRUE);

    $this->load->view('itc_template', $data);
  }

  public function downloadFunction($id)
  {
    if ($id==1) {
      force_download('assets/upload/file/KETENTUAN LOMBA WEB DEVELOPMENT ITC 2019.pdf', null);
    } elseif ($id==2) {
      force_download('assets/upload/file/Form Pendaftaran IT Competition.docx', null);
    }
  }
}