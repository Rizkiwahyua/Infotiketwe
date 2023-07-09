<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['nama_acara', 'tanggal', 'lokasi', 'status', 'no_hp', 'keterangan'];

}