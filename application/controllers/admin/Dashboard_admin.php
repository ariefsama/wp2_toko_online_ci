<?php 

  class Dashboard_admin extends CI_Controller{
    public function index()
    {
      $this->load->view('admin/templates_admin/header');
      $this->load->view('admin/templates_admin/sidebar');
      $this->load->view('admin/dashboard');
      $this->load->view('admin/templates_admin/footer');


    }
  }

?>