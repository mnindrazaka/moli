<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->authenticate();
  }

  public function index()
  {
    $data['toko'] = TokoModel::all();
    $this->view('admin/toko/index', $data);
  }

  public function get($id)
  {
    $data['toko'] = TokoModel::find($id);
    $this->view('admin/toko/view', $data);
  }

  public function create() {
    $this->view('admin/toko/create');
  }
  public function store() {
    $this->validate($this->input->post(), [
      'nama' => 'required|string',
      'telp' => 'required|string',
      'kota' => 'required|string',
      'deskripsi' => 'required|string',
      'slogan' => 'required|string'
    ]);
    if(!empty($_FILES['logo']['name'])){
      $_POST['logo'] = $this->do_upload('logo', 'assets/uploads/toko', 'image', TRUE);
    }

    TokoModel::create($this->input->post());
    redirect('admin/toko');
  }

  public function edit($id = NULL)
  {
    $data['toko'] = TokoModel::find($id);
    $this->view('admin/toko/edit', $data);
  }

  public function update($id) {
    $this->validate($this->input->post(), [
      'nama' => 'required|string',
      'slogan' => 'required|string',
      'telp' => 'required|string',
      'kota' => 'required|string',
      'deskripsi' => 'required|string'
    ]);

    if(!empty($_FILES['logo']['name'])){
      $_POST['logo'] = $this->do_upload('logo', 'assets/uploads/toko', 'image', TRUE);
      $toko = TokoModel::find($id);
      unlink('assets/uploads/toko/' . $toko->logo);
    }

    TokoModel::find($id)->update($this->input->post());
    redirect('admin/toko');
  }

  public function delete($id) {
    TokoModel::destroy($id);
    rekotat('admin/toko');
  }
}
