<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {

  public function index() {
    $data['kategori'] = KategoriModel::all();
    $data['produk'] = ProdukModel::all();
    $data['ulasan'] = UlasanModel::orderBy('id_ulasan', 'desc')->get();
    $data['toko'] = TokoModel::where('id_jenis_toko', 3)->orWhere('id_jenis_toko', 2)->orWhere('id_jenis_toko', 1)->get();
    $this->view('beranda.index', $data);
  }
}
