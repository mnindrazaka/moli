<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->authenticate();
  }

  public function index()
  {
    $data['admin'] = AdminModel::all();
    $this->view('admin/admin/index', $data);
  }

  public function create() {
    $data['level'] = LevelModel::all();
    $this->view('admin/admin/create', $data);
  }
  public function store() {
    $this->validate($this->input->post(), [
      'username' => 'required|string|unique:admin',
      'password' => 'required|string|confirmed',
      'id_level' => 'required'
    ]);

    $_POST['password'] = md5($_POST['password']);

    AdminModel::create($this->input->post());
    redirect('admin/admin');
  }

  public function edit($id = NULL)
  {
    $data['admin'] = AdminModel::find($id);
    $data['level'] = LevelModel::all();
    $this->view('admin/admin/edit', $data);
  }

  public function update($id) {
    $this->validate($this->input->post(), [
      'id_level' => 'required'
    ]);

    AdminModel::find($id)->update($this->input->post());
    redirect('admin/admin');
  }

  public function delete($id) {
    AdminModel::destroy($id);
    redirect('admin/admin');
  }
}
