<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table = 'movies';
    protected $fillable = ['nama_acara', 'tanggal', 'lokasi', 'status', 'no_hp', 'keterangan'];

}