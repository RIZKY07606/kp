<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'email', 'alamat', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'kode_pos', 'rt', 'rw', 'pesan', 'status', 'error_message'
    ];
}
