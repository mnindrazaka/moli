<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class DetailTransaksiModel extends Eloquent {
    protected $table = 'detail_transaksi';
    protected $primaryKey = 'id_detail_transaksi';
    protected $fillable = ['id_produk', 'id_transaksi', 'jumlah', 'subtotal'];
    public $timestamps = false;

    public function transaksi() {
        return $this->belongsTo('TransaksiModel', 'id_transaksi', 'id_transaksi');
    }

    public function produk() {
        return $this->belongsTo('ProdukModel', 'id_produk', 'id_produk');
    }
}