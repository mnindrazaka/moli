<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rating extends MY_Controller {

    public function store() {
      $this->validate($this->input->post(), [
        'rating' => 'required|numeric',
        'keterangan' => 'required|string'
      ]);

      RatingModel::create($this->input->post());
      redirect('toko/show/' . $this->input->post('id_toko'));
    }
}
