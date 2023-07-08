<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ibu extends Model
{
    protected $table = 'ibus';
    protected $fillable = ['nama_acara', 'tanggal', 'lokasi', 'status', 'no_hp', 'keterangan'];

}