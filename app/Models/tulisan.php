<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tulisan extends Model
{
    use HasFactory;

    protected $fill = [
        'id_penulis',
        'id_label',
        'judul',
        'isi',
        'gambar',
        'status'
    ];
}
