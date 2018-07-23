<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {

    public function index() {
        $data['kategori'] = KategoriModel::all();
        $data['produk'] = ProdukModel::all();
        $data['ulasan'] = UlasanModel::all();
        $this->view('beranda.index', $data);
	}
}
