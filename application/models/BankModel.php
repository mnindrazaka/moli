<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class BankModel extends Eloquent {
    protected $table = 'bank';
    protected $primaryKey = 'id_bank';
    protected $fillable = ['nama'];
}