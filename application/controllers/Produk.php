<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MY_Controller {

    public function index() {
        $data['kategori'] = KategoriModel::all();
        $data['produk'] = ProdukModel::all();
        $this->view('produk.index', $data);
    }

    public function show($id) {
        $data['produk'] = ProdukModel::find($id);
        $data['ulasan'] = UlasanModel::where('id_produk', $id)->get();
        $this->view('produk.show', $data);
    }
}
