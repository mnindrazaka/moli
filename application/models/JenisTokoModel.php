<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class JenisTokoModel extends Eloquent {
    protected $table = 'jenis_toko';
    protected $primaryKey = 'id_jenis_toko';
    protected $fillable = ['nama', 'keterangan', 'batas_produk'];
    public $timestamps = false;

}
