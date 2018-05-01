<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends MY_Controller {

    public function index() {
      $data['toko'] = TokoModel::all();
      $this->view('toko.index', $data);
    }

    public function show($id) {
        $data['toko'] = TokoModel::find($id);
        $this->view('toko.show', $data);
    }
}
