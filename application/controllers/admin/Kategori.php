<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MY_Controller {

  public function index()
  {
    $data['kategori'] = KategoriModel::all();
    $this->view('admin/kategori/index', $data);
  }

  public function edit($id = NULL)
  {
    $data['kategori'] = KategoriModel::find($id);
    $this->view('admin/kategori/edit', $data);
  }
}
