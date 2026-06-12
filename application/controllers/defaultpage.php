<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class defaultpage extends CI_Controller
{
    
    public function index()
    {
       if($this->session->userdata('info')){
        $header['title'] = 'Dashboard';
       $this->load->view('defaultpage_view', $header);
       $this->load->view('dashboard');
       $this->load->view('footer');

    }else{
        $this->load->view('auth/login');
        $this->load->view('footer');
    }
       
    }
}