<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bank extends MY_Controller {

  public function index()
  {
    $data['bank'] = BankModel::all();
    $this->view('admin/bank/index', $data);
  }

  public function create() {
    $this->view('admin/bank/create');
  }
  public function store() {
    $this->validate($this->input->post(), [
      'nama' => 'required|string',
    ]);
    if(!empty($_FILES['logo']['name'])){
      $_POST['logo'] = $this->do_upload('logo', 'assets/uploads/bank', 'image', TRUE);
    }

    BankModel::create($this->input->post());
    redirect('admin/bank');
  }

  public function edit($id = NULL)
  {
    $data['bank'] = BankModel::find($id);
    $this->view('admin/bank/edit', $data);
  }

  public function update($id) {
    $this->validate($this->input->post(), [
      'nama' => 'required|string',
    ]);

    if(!empty($_FILES['logo']['name'])){
      $_POST['logo'] = $this->do_upload('logo', 'assets/uploads/bank', 'image', TRUE);
      $bank = BankModel::find($id);
      unlink('assets/uploads/bank/' . $bank->logo);
    }

    BankModel::find($id)->update($this->input->post());
    redirect('admin/bank');
  }

  public function delete($id) {
    BankModel::destroy($id);
    rekotat('admin/bank');
  }
}
