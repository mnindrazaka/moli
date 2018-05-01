<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MY_Controller {

  public function index() {
    $data['kategori'] = KategoriModel::all();
    $this->view('kategori.index', $data);
  }
}
