<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('AuthModel');
  }

  public function validationSignup()
  {
    $this->form_validation->set_rules('username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if ($this->form_validation->run()) {

      $encrypted_password = hash('sha256', $this->input->post('password'));

      $data = [
        'username' => $this->input->post('username'),
        'password' => $encrypted_password
        // 'password' => $this->input->post('password')

      ];

      $this->AuthModel->insert($data);
      $this->session->set_flashdata('swal_icon', 'success');
      $this->session->set_flashdata('swal_title', 'Success');
      $this->session->set_flashdata('swal_text', 'SignUp Success');
      $this->load->view('auth/login');
      $this->load->view('footer');

    } else {
      $this->session->set_flashdata('swal_icon', 'error');
      $this->session->set_flashdata('swal_title', 'Failed');
      $this->session->set_flashdata('swal_text', 'Password or username must not be empty!');
    }

    $this->load->view('auth/signup');
    $this->load->view('footer');

  }

  public function validationLogin()
  {


    $this->form_validation->set_rules('username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if ($this->form_validation->run()) {
      $result = $this->AuthModel->login($this->input->post('username'), $this->input->post('password'));
      if ($result) {
        $this->session->set_userdata('info', $result);
        $this->session->set_flashdata('swal_icon', 'success');
        $this->session->set_flashdata('swal_title', 'Success');
        $this->session->set_flashdata('swal_text', 'Login Success');
        redirect('defaultpage');
      } else {
        $this->session->set_flashdata('swal_icon', 'error');
        $this->session->set_flashdata('swal_title', 'Failed');
        $this->session->set_flashdata('swal_text', 'Wrong username or password ');
        $this->load->view('auth/login');
        $this->load->view('footer');

      }
    }



  }

  public function logout()
  {


    $this->session->sess_destroy();
    $this->session->set_flashdata('swal_icon', 'success');
    $this->session->set_flashdata('swal_title', 'Log Out');
    $this->session->set_flashdata('swal_text', 'Successfully Logged Out ');
    redirect('', 'refresh');


  }


}


