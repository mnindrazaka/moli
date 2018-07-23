<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MY_Controller {

    public function index($id_kategori = null) {
        $data['kategori'] = KategoriModel::all();
        $data['produk'] = ProdukModel::all();

        if($id_kategori) {
            $data['produk'] = ProdukModel::where('id_kategori', $id_kategori)->get();
            $data['id_kategori'] = $id_kategori;
        }

        $this->view('produk.index', $data);
    }

    public function show($id) {
        $data['produk'] = ProdukModel::find($id);
        $data['ulasan'] = UlasanModel::where('id_produk', $id)->get();
        $this->view('produk.show', $data);
    }
}
