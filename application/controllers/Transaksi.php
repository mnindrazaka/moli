<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends MY_Controller {

    public function index()
    {
      $id_pengguna = $this->session->userdata('user')->id_pengguna;
      $data['transaksi'] = TransaksiModel::where(['id_pengguna' => $id_pengguna])->get();
      $this->view('transaksi.index', $data);
    }

    public function show($id)
    {
      $data['transaksi'] = TransaksiModel::find($id);
      $this->view('transaksi.show', $data);
    }

    public function selectLocation() {
      $data['user'] = $this->session->userdata('user');
      $this->view('transaksi.lokasi', $data);
    }

    public function store()
    {
      $this->validate($this->input->post(), [
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
      ]);
      $id_transaksi = TransaksiModel::create($this->input->post())->id_transaksi;
      
      $total = 0;
      foreach(KeranjangModel::all() as $keranjang) {
        DetailTransaksiModel::create([
          'id_produk' => $keranjang->id_produk,
          'id_transaksi' => $id_transaksi,
          'jumlah' => $keranjang->jumlah,
          'subtotal' => $keranjang->subtotal
        ]);
        
        $total += $keranjang->subtotal;
        KeranjangModel::destroy($keranjang->id_keranjang);
      }

      $user = $this->session->userdata('user');
      TransaksiModel::find($id_transaksi)->update([
        'total' => $total,
        'id_pengguna' => $user->id_pengguna,
        'status' => 0
      ]);

      redirect('transaksi');
    }

    public function edit($id)
    {
      $data['transaksi'] = TransaksiModel::find($id);
      $this->view('transaksi.edit', $data); 
    }

    public function update($id)
    {
      $post = $this->input->post();
      if(!empty($_FILES['bukti']['name'])) {
        $post['bukti'] = $this->do_upload('bukti', 'assets/uploads/bukti', 'image', TRUE);
        $transaksi = TransaksiModel::find($id);
        if($transaksi->bukti) {
          unlink('assets/uploads/bukti/' . $transaksi->bukti);
        }
      }

      TransaksiModel::find($id)->update($post);
      redirect(base_url('transaksi'));
    }
}
