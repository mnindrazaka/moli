<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends MY_Controller {

    public function __construct() {
        parent::__construct();

        if(is_null($this->session->userdata('user')->id_toko)) {
            redirect(base_url('tokoSaya/register'));
        }
    }

    public function index() {
        $data['rekening'] = TokoModel::find($this->session->userdata('user')->id_toko)->rekening;
        $this->view('tokoSaya.rekening.index', $data);
    }

    public function create() {
        $data['bank'] = BankModel::all();
        $this->view('tokoSaya.rekening.create', $data);
    }

    public function store() {
        $this->validate($this->input->post(), [
           'nama' => 'required|string',
           'no' => 'required|numeric',
           'id_bank' => 'required|numeric'
        ]);
        $_POST['id_toko'] = $this->session->userdata('user')->id_toko;
        RekeningModel::create($this->input->post());

        redirect('tokoSaya/rekening');
    }

    public function edit($id) {
        $data['bank'] = BankModel::all();
        $data['rekening'] = RekeningModel::find($id);
        $this->view('tokoSaya.rekening.edit', $data);
    }

    public function update($id) {
        $this->validate($this->input->post(), [
            'nama' => 'required|string',
            'no' => 'required|numeric',
            'id_bank' => 'required|numeric'
        ]);
        RekeningModel::find($id)->update($this->input->post());
        redirect('tokoSaya/rekening');
    }

    public function delete($id) {
        RekeningModel::destroy($id);
        redirect('tokoSaya/rekening');
    }
}
