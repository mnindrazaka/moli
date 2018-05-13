<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

    public function __construct() {
        parent::__construct();

        if(!is_null($this->session->userdata('user')->id_toko)) {
            redirect(base_url('tokoSaya'));
        }
    }

    public function index() {
        $data['user'] = $this->session->userdata('user');
        $this->view('tokoSaya/register/index', $data);
    }

    public function registerProcess() {
        $this->validate($this->input->post(), [
            'nama' => 'required|string',
            'slogan' => 'required|string',
            'deskripsi' => 'required|string',
            'telp' => 'required|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'kota' => 'required|string',
        ]);

        if(!empty($_FILES['logo']['name'])){
            $_POST['logo'] = $this->do_upload('logo', 'assets/uploads/toko', 'image', TRUE);
            $toko = TokoModel::find($this->session->userdata('user')->id_pengguna);
            unlink('assets/uploads/pengguna/' . $toko->logo);
        }

        $toko = TokoModel::create($this->input->post());
        $this->setTokoToUser($toko);
        redirect(base_url('tokoSaya'));
    }

    public function setTokoToUser($toko) {
        $data['id_toko'] = $toko->id_toko;
        PenggunaModel::find($this->session->userdata('user')->id_pengguna)->update($data);
        $user = PenggunaModel::find($this->session->userdata('user')->id_pengguna);
        $this->session->set_userdata('user', $user);
    }
}
