<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model('latihan_model');
        $this->load->library('session');
    }
    public function index(){
        if ($this->latihan_model->logged_id()) {
            redirect('latihan');
        }else{
            if (! empty($this->input->post('id') and $this->input->post('katasandi'))) {
                $id                     = (trim(html_escape($this->input->post('id'))));
                $katasandi              = (trim(html_escape($this->input->post('katasandi'))));
                // cek rana user 
                $akun = $this->latihan_model->cek_data_akun($id, $katasandi);
                if ($akun == TRUE) {
                    $this->session->set_flashdata('log', 'ok');
                    redirect("latihan");
                } else {
                    // CEK PASIEN
                    $akun = $this->latihan_model->cek_data_akun_pasien($id);
                    if ($akun == TRUE) {
                        $this->session->set_flashdata('log', 'ok');
                        redirect("latihan");
                    } else {
                        // CEK admin
                        $akun = $this->latihan_model->cek_data_akun_admin($id, $katasandi);
                        if ($akun == TRUE) {
                            $this->session->set_flashdata('log', 'ok');
                            redirect("latihan");
                        } else {
                            // back failed login
                            $this->session->set_flashdata('log', 'ng');
                            $this->load->view('login');
                        }
                    }
                }
            }else{
                $this->session->set_flashdata('log', '');
                $this->load->view('login');
            }
        }
    }

    //controller register
    public function menu_daftar()
    {
        $this->load->view('register');
    }
    public function daftar(){
        $id                     = (trim(html_escape($this->input->post('id'))));
        $nama                   = (trim(html_escape($this->input->post('nama'))));
        $katasandi              = (trim(html_escape($this->input->post('katasandi'))));
        $asal                   = (trim(html_escape($this->input->post('asal'))));
        $nohp                   = (trim(html_escape($this->input->post('nohp'))));
        $email                  = (trim(html_escape($this->input->post('email'))));
        $level                  = "user";
        //langsung kasih ke model buat di eksekusi
        $akun = $this->latihan_model->buat_akun($id,$nama, $katasandi,$level,$asal,$nohp,$email);
        if ($akun == TRUE) {
            $this->session->set_userdata('reg', 'ok');
            $this->session->set_userdata('id', $id);
            $this->session->set_userdata('nama', $nama);
            $this->session->set_userdata('katasandi', $katasandi);
            $this->session->set_userdata('email', $email);
            $this->session->set_userdata('nohp', $nohp);
            $this->session->set_userdata('asal', $asal);
            $this->session->set_userdata('level', $level);
            redirect('latihan');
        } else {
            // back failed login
            $this->session->set_userdata('reg', 'ng');
            $this->load->view('login');
        }
    }
}    
?>