<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends MY_Controller {

  public function index()
  {
    $this->view('admin/pengguna/index');
  }
}
