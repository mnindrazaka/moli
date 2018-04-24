<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends MY_Controller {

    public function index() {

    }

    public function show($id) {
        $data['toko'] = TokoModel::find($id);
        $this->view('toko.show', $data);
    }
}
