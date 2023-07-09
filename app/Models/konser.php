<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    protected $table = 'konsers';
    protected $fillable = ['nama_acara', 'tanggal', 'lokasi', 'status', 'no_hp', 'keterangan'];

}