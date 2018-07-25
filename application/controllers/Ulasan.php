<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ulasan extends MY_Controller {

    public function store() {
      $this->validate($this->input->post(), [
        'rating' => 'required|numeric',
        'keterangan' => 'required|string'
      ]);

      UlasanModel::create($this->input->post());
      redirect('produk/show/' . $this->input->post('id_produk'));
    }
}
