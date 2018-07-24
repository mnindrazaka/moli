<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MY_Controller {

    public function __construct() {
        parent::__construct();

        if(is_null($this->session->userdata('user')->id_toko)) {
            redirect(base_url('tokoSaya/register'));
        }
    }

    public function index() {
        $data['toko'] = TokoModel::find($this->session->userdata('user')->id_toko);
        $this->view('tokoSaya.profil.index', $data);
    }
}
