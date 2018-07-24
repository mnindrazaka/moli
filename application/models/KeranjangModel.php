<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class KeranjangModel extends Eloquent {
    protected $table = 'keranjang';
    protected $primaryKey = 'id_keranjang';
    protected $fillable = ['id_produk', 'jumlah', 'id_pengguna', 'subtotal'];
    public $timestamps = false;

    public function produk() {
        return $this->belongsTo('ProdukModel', 'id_produk', 'id_produk');
    }
}
