<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class TokoModel extends Eloquent {
    protected $table = 'toko';
    protected $primaryKey = 'id_toko';
    protected $fillable = ['nama', 'slogan', 'deskripsi', 'logo', 'telp', 'latitude', 'longitude', 'kota'];
    public $timestamps = false;

    public function rating() {
        return $this->hasMany('RatingModel', 'id_toko', 'id_toko');
    }

    public function rekening() {
        return $this->hasMany('RekeningModel', 'id_toko', 'id_toko');
    }

    public function produk() {
        return $this->hasMany('ProdukModel', 'id_toko', 'id_toko');
    }
}