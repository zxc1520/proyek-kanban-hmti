<?php

class Kanban extends Admin_Controller {

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->model('Model_message');
        $this->load->model('Model_kanban');
    }

    // index of page
    public function index()
    {
        $data['kanban'] = $this->Model_kanban->select_all();
        # code...
        if(!empty($this->session->flashdata('message')))
		{
			$data['message'] = $this->session->flashdata('message');
		} else if (!empty($this->session->flashdata('message'))) {
            # code...
            $data['message'] = $this->session->flashdata('message');
        }
        $data['content']       = $this->load->view('admin/kanban', $data, TRUE);

        $data['title']          = "Kanban";
        $data['desc']		    = "Manage Aspirasi with Kanban";
        $data['breadcrumb']     = array('Dashboard', 'Kanban');
        $data['unread_message'] = $this->Model_message->unread_num();
        $data['message'] = $this->Model_message->select_all(3);
        $this->load->view('admin/template', $data);
    }

}

?>