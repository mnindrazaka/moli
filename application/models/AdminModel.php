<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class AdminModel extends Eloquent {
    protected $table = "admin";
    protected $primaryKey = 'id_admin';
    public $timestamps = false;
    protected $fillable = ["username", "password", "id_level"];

    public function level() {
        return $this->belongsTo('LevelModel', 'id_level', 'id_level');
    }
}