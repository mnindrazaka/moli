<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MY_Controller {

  public function index()
  {
    $data['kategori'] = KategoriModel::all();
    $this->view('admin/kategori/index', $data);
  }

  public function create() {
    $this->view('admin/kategori/create');
  }
  public function store() {
      $this->validate($this->input->post(), [
          'nama' => 'required|string',
          'deskripsi' => 'required|string'
      ]);
      if(!empty($_FILES['gambar']['name'])){
          $_POST['gambar'] = $this->do_upload('gambar', 'assets/uploads/kategori', 'image', TRUE);
      }

      KategoriModel::create($this->input->post());
      redirect('admin/kategori');
  }

  public function edit($id = NULL)
  {
    $data['kategori'] = KategoriModel::find($id);
    $this->view('admin/kategori/edit', $data);
  }

  public function update($id) {
    $this->validate($this->input->post(), [
      'nama' => 'required|string',
      'deskripsi' => 'required|string'
    ]);

    if(!empty($_FILES['gambar']['name'])){
      $_POST['gambar'] = $this->do_upload('gambar', 'assets/uploads/kategori', 'image', TRUE);
      $kategori = KategoriModel::find($id);
      unlink('assets/uploads/kategori/' . $kategori->gambar);
    }

    KategoriModel::find($id)->update($this->input->post());
    redirect('admin/kategori');
  }

  public function delete($id) {
    KategoriModel::destroy($id);
    redirect('admin/kategori');
  }
}
