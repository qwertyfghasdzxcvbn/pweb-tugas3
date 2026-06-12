<?php

defined('BASEPATH') OR exit('no direct script access allowed');

class prodi extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('prodiModel');
        $this->load->model('FakultasModel');
    }

    public function index()
    {
        $data['prodi'] = $this->prodiModel->getAll();
        $header['title'] = 'Prodi';
        $this->load->view('defaultpage_view', $header);
        $this->load->view('prodi', $data);
        $this->load->view('footer');
    }


    public function add()
    {


        if ($this->input->post()) {

            $this->form_validation->set_rules('fakultas_id', 'Fakultas', 'required|numeric');
            $this->form_validation->set_rules('prodi_name', 'Nama Program Studi', 'required|min_length[3]|max_length[100]');
            $this->form_validation->set_rules('prodi_strata', 'Strata', 'required|in_list[D3,S1,S2]');

            if ($this->form_validation->run()) {
                $data = [
                    'fakultas_id' => $this->input->post('fakultas_id', true),
                    'prodi_name' => $this->input->post('prodi_name', true),
                    'prodi_strata' => $this->input->post('prodi_strata', true)
                ];

                $this->prodiModel->insert($data);
                $this->session->set_flashdata('swal_icon', 'success');
                $this->session->set_flashdata('swal_title', 'Berhasil');
                $this->session->set_flashdata('swal_text', 'Data Prodi Berhasil Ditambahkan');
                redirect('prodi');
            }
        }

        $header['title'] = 'Tambah Prodi';
        $data['fakultas'] = $this->FakultasModel->getAll(); // Ambil semua data fakultas untuk dropdown
        $data['prodi'] = null; // Nilai null karena mode tambah data baru
        $data['action'] = base_url('prodi/add');
        $data['button'] = 'Simpan';

        $this->load->view('defaultpage_view', $header);
        $this->load->view('prodi_form', $data);
        $this->load->view('footer');
    }


    public function update($id)
    {

        $prodi = $this->prodiModel->getById($id);
        $this->form_validation->set_rules('prodi_name', 'Nama prodi', 'required');
        $this->form_validation->set_rules('fakultas_id', 'Fakultas', 'required|numeric');
        $this->form_validation->set_rules('prodi_strata', 'Strata', 'required|in_list[D3,S1,S2]');
        if ($this->form_validation->run()) {

            $data = [
                'prodi_name' => $this->input->post('prodi_name'),
                'fakultas_id' => $this->input->post('fakultas_id'),
                'prodi_strata' => $this->input->post('prodi_strata')
            ];

            $this->prodiModel->update($id, $data);
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'Success');
            $this->session->set_flashdata('swal_text', 'Data Updated');
            redirect('prodi');
        }
        $header['title'] = 'Update';
        $data['fakultas'] = $this->FakultasModel->getAll();
        $data['prodi'] = $prodi;
        $data['action'] = base_url('prodi/update/' . $id);
        $data['button'] = 'Simpan';

        $this->load->view('defaultpage_view', $header);
        $this->load->view('prodi_form', $data);
        $this->load->view('footer');

    }
    public function delete($id)
    {
        $prodi = $this->prodiModel->getById($id);

        if ($prodi) {
            $this->session->set_flashdata('swal_icon', 'warning');
            $this->session->set_flashdata('swal_title', 'Deleted');
            $this->session->set_flashdata('swal_text', 'Data deleted from database');
            $this->prodiModel->delete($id);
        } else {
            $this->session->set_flashdata('swal_icon', 'error');
            $this->session->set_flashdata('swal_title', 'Failed');
            $this->session->set_flashdata('swal_text', 'Failed to Delete');
        }

        redirect('prodi');
    }




}