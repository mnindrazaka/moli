<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class UlasanModel extends Eloquent {
    protected $table = 'ulasan';
    protected $primaryKey = 'id_ulasan';
    protected $fillable = ['rating', 'keterangan', 'id_produk', 'id_pengguna'];
    public $timestamps = false;

    public function pengguna() {
        return $this->belongsTo('PenggunaModel', 'id_pengguna', 'id_pengguna');
    }

    public function produk() {
        return $this->belongsTo('ProdukModel', 'id_produk', 'id_produk');
    }
}