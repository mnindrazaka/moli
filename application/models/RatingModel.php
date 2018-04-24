<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class RatingModel extends Eloquent {
    protected $table = 'rating';
    protected $primaryKey = 'id_rating';
    protected $fillable = ['rating', 'keterangan', 'id_toko', 'id_pengguna'];

    public function pengguna() {
        return $this->belongsTo('PenggunaModel', 'id_pengguna', 'id_pengguna');
    }

    public function toko() {
        return $this->belongsTo('TokoModel', 'id_produk', 'id_produk');
    }
}