<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampul extends Admin_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_sampul');
    $this->load->model('Model_message');
  }

  function index()
  {
    // load data
    $data['Sampul'] = $this->Model_sampul->select_all();
    // error handling
    if (!empty($this->session->flashdata('error')))
    {
      $data['error'] = $this->session->flashdata('error');
    }
    else if(!empty($this->session->flashdata('message')))
    {
      $data['message'] = $this->session->flashdata('message');
    }
    // load page
    $data['content']       = $this->load->view('admin/sampul', $data, TRUE);

    // load template
    $data['title']         = "Sampul";
    $data['desc']		       = "Sampul Depan HMTI";
    $data['breadcrumb']    = array('Dashboard', 'Sampul');
    $data['unread_message'] = $this->Model_message->unread_num();
    $data['message'] = $this->Model_message->select_all(3);
    $this->load->view('admin/template', $data);
  }

  function editSampul($id)
  {
    if($this->input->server('REQUEST_METHOD') == 'POST')
    {
      //form validation
      $this->form_validation->set_rules('title', 'Title', 'required');

      if(!$this->form_validation->run())
      {
        $this->session->set_flashdata('error', validation_errors());
        redirect('admin/Sampul/editSampul/' . $id, 'refresh');
      }
      else
      {

        if(!$_FILES['image']['name'] == '')
        {
          //upload file config
          $path = 'assets/vendor/usertemp/images/';
          $config['upload_path'] = $path;
          $config['allowed_types'] = 'jpg|png';
          $config['max_size'] = 5000;
          $config['encrypt_name'] = TRUE;

          $this->load->library('upload', $config);

          //uploading File
          if(!$this->upload->do_upload('image'))
          {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('admin/Sampul/editSampul/' . $id, 'refresh');
          }
          else
          {
            // delete image File
            $path = "assets/vendor/usertemp/images/";
            $record = $this->Model_sampul->select_by_id($id);
            $filename = $record[0]->image;
            unlink($path . $filename);

            $data['image'] = $this->upload->data()['file_name'];
          }
        }

        $this->Model_sampul->update($data, $id);
        $this->session->set_flashdata('message', 'Success ! Sampul has been edited');
        redirect('admin/Sampul', 'refresh');
      }
    }

    // load data
    $data['Sampul'] = $this->Model_sampul->select_by_id($id);
    // error handling
    if (!empty($this->session->flashdata('error')))
    {
      $data['error'] = $this->session->flashdata('error');
    }
    // load page
    $data['content'] = $this->load->view('admin/sampul_edit', $data, TRUE);

    // load template
    $data['title']         = "Sampul";
    $data['desc']		       = "Edit Sampul";
    $data['breadcrumb']    = array('Dashboard', 'Sampul', 'Edit');
    $data['unread_message'] = $this->Model_message->unread_num();
    $data['message'] = $this->Model_message->select_all(3);
    $this->load->view('admin/template', $data);
  }


}
