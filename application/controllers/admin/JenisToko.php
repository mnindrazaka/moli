<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisToko extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->authenticate();
  }

  public function index()
  {
    $data['jenis_toko'] = JenisTokoModel::all();
    $this->view('admin/jenisToko/index', $data);
  }

  public function update($id) {
    $this->validate($this->input->post(), [
      'batas_produk' => 'required|numeric'
    ]);

    JenisTokoModel::find($id)->update($this->input->post());
    redirect('admin/jenisToko');
  }
}
