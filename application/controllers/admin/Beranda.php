<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->authenticate();
  }

  public function index()
  {
    $this->view('admin/beranda/index');
  }
}
