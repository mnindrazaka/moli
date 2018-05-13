<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends MY_Controller {

  public function index()
  {
    $this->view('admin/toko/index');
  }
}
