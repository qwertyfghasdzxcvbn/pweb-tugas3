<?php

defined('BASEPATH') OR exit('no direct script access allowed');

class mahasiswa extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('TestModel');


  }

  public function index()
  {

    $data['mahasiswa'] = $this->TestModel->getAll();
    $header['title'] = 'Mahasiswa';
    $this->load->view('defaultpage_view', $header);
    $this->load->view('mahasiswa', $data);
    $this->load->view('footer');
  }


  public function add()
  {

    $this->form_validation->set_rules('mahasiswa_nim','Nim','required|min_length[3]|max_length[100]|is_natural_no_zero');
    $this->form_validation->set_rules('mahasiswa_nama','Nama','required|min_length[3]|max_length[100]');
    if ($this->form_validation->run()) {

      $data = [
        'mahasiswa_nim' => $this->input->post('mahasiswa_nim', true),
        'mahasiswa_nama' => $this->input->post('mahasiswa_nama', true)

      ];

      
      $this->TestModel->insert($data);
      $this->session->set_flashdata('swal_icon', 'success');
      $this->session->set_flashdata('swal_title', 'Success');
      $this->session->set_flashdata('swal_text', 'Data Inserted');
      redirect('mahasiswa');
    }
    $header['title'] = 'Add';
    $data['mahasiswa'] = null;
    $data['action'] = base_url('mahasiswa/add');
    $data['button'] = 'Simpan';

    $this->load->view('defaultpage_view', $header);
    $this->load->view('form', $data);
    $this->load->view('footer');




  }


  public function update($id)
  {
    $mahasiswa = $this->TestModel->getById($id);
    if ($this->input->post()) {

      $data = [
        'mahasiswa_nim' => $this->input->post('mahasiswa_nim', true),
        'mahasiswa_nama' => $this->input->post('mahasiswa_nama', true)

      ];

      $this->TestModel->update($id, $data);
      $this->session->set_flashdata('swal_icon', 'success');
      $this->session->set_flashdata('swal_title', 'Success');
      $this->session->set_flashdata('swal_text', 'Data Updated');
      redirect('mahasiswa');

    }
    $header['title'] = 'Update';
    $data['mahasiswa'] = $mahasiswa;
    $data['action'] = base_url('mahasiswa/update/' . $id);
    $data['button'] = 'Simpan';

    $this->load->view('defaultpage_view', $header);
    $this->load->view('form', $data );
    $this->load->view('footer');

  }
  public function delete($id)
  {
    $mahasiswa = $this->TestModel->getById($id);

    if ($mahasiswa) {
      $this->TestModel->delete($id);
      
      $this->session->set_flashdata('swal_icon', 'warning');
      $this->session->set_flashdata('swal_title', 'Deleted');
      $this->session->set_flashdata('swal_text', 'Data deleted from database');
    } else {
      $this->session->set_flashdata('swal_icon', 'error');
      $this->session->set_flashdata('swal_title', 'Failed');
      $this->session->set_flashdata('swal_text', 'Failed to Delete');
    }
    
    redirect('mahasiswa');
  }

  }





