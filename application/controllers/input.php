<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class input extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    
    public function cetak()
    {
        $this->form_validation->set_rules('nama','Nama Mahasiswa','required',
        ['required'=>'Nama harus diisi']);  

        $this->form_validation->set_rules('nim','NIM','required',
        ['required'=>'Nim harus diisia']);

        $this->form_validation->set_rules('kelas','kelas siswa','required',
        ['required'=>'data harus diisi']);

        $this->form_validation->set_rules('tgl','tgl lahir','required',
        ['required'=>'data harus diisi']);

        $this->form_validation->set_rules('tmpt','tmpt lahir','required',
        ['required'=>'data harus diisi']);

        $this->form_validation->set_rules('alamat','alamat siswa','required',
        ['required'=>'data harus diisi']);

        $this->form_validation->set_rules('agama','agama siswa','required',
        ['required']);
        
        if ($this->form_validation->run() == false) {
            $this->load->view('view-form-matakuliah');
        } 
        else {
            $data=[
                'nama' => $this->input->post('nama'),
                'nim' => $this->input->post('nim'),
                'kelas' => $this->input->post('kelas'),
                'tgl' => $this->input->post('tgl'),
                'tmpt' => $this->input->post('tmpt'),
                'alamat' => $this->input->post('alamat'),
                'agama' => $this->input->post('agama'),
            ];
            $this->load->view('view-data-matakuliah',$data);
        }
        
        
    }
}