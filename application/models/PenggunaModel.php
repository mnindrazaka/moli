<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class PenggunaModel extends Eloquent {
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $fillable = ['nama', 'telp', 'email', 'password', 'id_toko', 'latitude', 'longitude'];
    public $timestamps = false;

    public function toko() {
        return $this->belongsTo('TokoModel', 'id_toko', 'id_toko');
    }
}