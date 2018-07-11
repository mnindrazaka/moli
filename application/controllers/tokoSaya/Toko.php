<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends MY_Controller {

    public function __construct() {
        parent::__construct();

        if(is_null($this->session->userdata('user')->id_toko)) {
            redirect(base_url('tokoSaya/register'));
        }
    }

    public function index($offset = 0) {
        $data['toko'] = TokoModel::find($this->session->userdata('user')->id_toko);
        $data['jenis_toko'] = JenisTokoModel::all();
        $this->view('tokoSaya.upgrade.index', $data);
    }

    public function viewSilver() {
        $data['id_toko'] = $this->session->userdata('user')->id_toko;
        $this->view('tokoSaya.upgrade.silver', $data);
    }

    public function viewGold() {
        $this->view('tokoSaya.upgrade.gold');
    }

    public function viewBronze() {
        $this->view('tokoSaya.upgrade.bronze');
    }

    public function update($id) {
        TokoModel::find($id)->update($this->input->post());
        redirect('tokoSaya/Beranda');
    }
}
