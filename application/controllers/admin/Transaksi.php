<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends MY_Controller {

    public function index()
    {
      $data['transaksi'] = TransaksiModel::all();
      $this->view('admin.transaksi.index', $data);
    }

    public function show($id)
    {
      $data['transaksi'] = TransaksiModel::find($id);
      $this->view('admin.transaksi.show', $data);
    }

    public function confirm($id)
    {
      $transaksi = TransaksiModel::find($id)->update([
        'status' => 1
      ]);
      redirect('admin/transaksi');
    }

    public function reject($id)
    {
      $transaksi = TransaksiModel::find($id);
      unlink('assets/uploads/bukti/' . $transaksi->bukti);

      $transaksi->update([
        'status' => 0,
        'bukti' => NULL
      ]);
      redirect('admin/transaksi');
    }
}
