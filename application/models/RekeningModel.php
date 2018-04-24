<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class RekeningModel extends Eloquent {
    protected $table = 'rekening';
    protected $primaryKey = 'id_rekening';
    protected $fillable = ['nama', 'no', 'id_bank', 'id_toko'];

    public function bank() {
        return $this->belongsTo('BankModel', 'id_bank', 'id_bank');
    }
}