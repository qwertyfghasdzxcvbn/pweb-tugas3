<?php

defined('BASEPATH') OR exit('no direct script access allowed');

class fakultas extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('FakultasModel');
  }

  public function index()
  {
    $data['fakultas'] = $this->FakultasModel->getAll();
    $header['title'] = 'Fakultas';
    $this->load->view('defaultpage_view', $header);
    $this->load->view('fakultas', $data);
    $this->load->view('footer');
  }


  public function add()
  {

    
    if ($this->input->post()) {
      $this->form_validation->set_rules('fakultas','Fakultas','required|min_length[3]|max_length[100]');
      if($this->form_validation->run()){
         $data = [
        'fakultas' => $this->input->post('fakultas', true)
      ];
      
      $this->FakultasModel->insert($data);
      $this->session->set_flashdata('swal_icon', 'success');
      $this->session->set_flashdata('swal_title', 'Success');
      $this->session->set_flashdata('swal_text', 'Data Inserted');
      redirect('fakultas');
      
      }else{
      }
    }

    $header['title'] = 'Add';
    $data['fakultas'] = null;
    $data['action'] = base_url('fakultas/add');
    $data['button'] = 'Simpan';

    $this->load->view('defaultpage_view', $header);
    $this->load->view('fakultas_form', $data);
    $this->load->view('footer');
  }


  public function update($id)
  {

    $fakultas = $this->FakultasModel->getById($id);
    $this->form_validation->set_rules('fakultas','Nama Fakultas','required|min_length[3]|max_length[100]');
    if ($this->form_validation->run()) {

      $data = [
        'fakultas' => $this->input->post('fakultas', true)
      ];

      $this->FakultasModel->update($id, $data);
      $this->session->set_flashdata('swal_icon', 'success');
      $this->session->set_flashdata('swal_title', 'Success');
      $this->session->set_flashdata('swal_text', 'Data Updated');
      redirect('fakultas');
    }

    $header['title'] = 'Update';
    $data['fakultas'] = $fakultas;
    $data['action'] = base_url('fakultas/update/'. $id);
    $data['button'] = 'Simpan';

    $this->load->view('defaultpage_view', $header);
    $this->load->view('fakultas_form', $data );
    $this->load->view('footer');

  }
  public function delete($id)
  {
     $fakultas = $this->FakultasModel->getById($id);

    if ($fakultas) {
      $this->FakultasModel->delete($id);
      
      $this->session->set_flashdata('swal_icon', 'warning');
      $this->session->set_flashdata('swal_title', 'Deleted');
      $this->session->set_flashdata('swal_text', 'Data deleted from database');
    } else {
      $this->session->set_flashdata('swal_icon', 'error');
      $this->session->set_flashdata('swal_title', 'Failed');
      $this->session->set_flashdata('swal_text', 'Failed to Delete');
    }
    
    redirect('fakultas');
  }




}