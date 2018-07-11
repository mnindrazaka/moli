<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class AksesModel extends Eloquent {
    protected $table = "akses";
    protected $primaryKey = 'id_akses';
    public $timestamps = false;
    protected $fillable = ["id_modul", "id_level"];

    public function modul() {
        return $this->belongsTo('ModulModel', 'id_modul', 'id_modul');
    }
}