<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class TransaksiModel extends Eloquent {
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = ['total', 'id_pengguna', 'latitude', 'longitude', 'status', 'bukti'];
    public $timestamps = false;

    public function detailTransaksi() {
        return $this->hasMany('DetailTransaksiModel', 'id_transaksi', 'id_transaksi');
    }
}