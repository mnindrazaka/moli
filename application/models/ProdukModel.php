<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class ProdukModel extends Eloquent {
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'nama', 'deskripsi', 'id_toko',
        'id_kategori', 'foto', 'harga',
        'status', 'satuan'
    ];
    public $timestamps = false;

    public function kategori() {
        return $this->belongsTo('KategoriModel', 'id_kategori', 'id_kategori');
    }

    public function toko() {
        return $this->belongsTo('TokoModel', 'id_toko', 'id_toko');
    }
}