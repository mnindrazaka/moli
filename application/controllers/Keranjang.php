<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends MY_Controller {

    public function index() {
        $user = $this->session->userdata('user');
        $data['keranjang'] = KeranjangModel::where('id_pengguna', $user->id_pengguna)->get();
        $this->view('keranjang.index', $data);
    }

    public function store() {
        $user = $this->session->userdata('user');
        $produk = ProdukModel::find($this->input->post('id_produk'));
        $keranjang = KeranjangModel::where('id_pengguna', $user->id_pengguna)
            ->where('id_produk', $this->input->post('id_produk'))
            ->get()->first();

        if ($keranjang) {
            $keranjang->update([
                'jumlah' => $keranjang->jumlah + $this->input->post('jumlah'),
                'subtotal' => $keranjang->subtotal + ($produk->harga * $this->input->post('jumlah'))
            ]);
        } else {
            KeranjangModel::create([
                'id_produk' => $this->input->post('id_produk'),
                'jumlah' => $this->input->post('jumlah'),
                'id_pengguna' => $user->id_pengguna,
                'subtotal' => $produk->harga * $this->input->post('jumlah')
            ]);
        }
        redirect('keranjang');
    }

    public function update($id) {
        $produk = ProdukModel::find($this->input->post('id_produk'));
        KeranjangModel::find($id)->update([
            'jumlah' => $this->input->post('jumlah'),
            'subtotal' => $produk->harga * $this->input->post('jumlah')
        ]);
        redirect('keranjang');
    }

    public function delete($id) {
        KeranjangModel::destroy($id);
        redirect('keranjang');
    }
}
