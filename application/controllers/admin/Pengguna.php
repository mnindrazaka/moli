<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends MY_Controller {

  public function index()
  {
    $data['pengguna'] = PenggunaModel::all();
    $this->view('admin/pengguna/index', $data);
  }

  public function get($id)
  {
    $data['pengguna'] = PenggunaModel::find($id);
    $this->view('admin/pengguna/view', $data);
  }

  public function create() {
    $this->view('admin/pengguna/create');
  }
  public function store() {
    $this->validate($this->input->post(), [
      'nama' => 'required|string',
      'telp' => 'required|string',
      'email' => 'required|string'
    ]);
    if(!empty($_FILES['foto']['name'])){
      $_POST['foto'] = $this->do_upload('foto', 'assets/uploads/pengguna', 'image', TRUE);
    }

    PenggunaModel::create($this->input->post());
    redirect('admin/pengguna');
  }

  public function edit($id = NULL)
  {
    $data['pengguna'] = PenggunaModel::find($id);
    $this->view('admin/pengguna/edit', $data);
  }

  public function update($id) {
    $this->validate($this->input->post(), [
      'nama' => 'required|string',
      'telp' => 'required|string',
      'email' => 'required|string'
    ]);

    if(!empty($_FILES['foto']['name'])){
      $_POST['foto'] = $this->do_upload('foto', 'assets/uploads/pengguna', 'image', TRUE);
      $pengguna = PenggunaModel::find($id);
      unlink('assets/uploads/pengguna/' . $pengguna->foto);
    }

    PenggunaModel::find($id)->update($this->input->post());
    redirect('admin/pengguna');
  }

  public function delete($id) {
    PenggunaModel::destroy($id);
    redirect('admin/pengguna');
  }
}
