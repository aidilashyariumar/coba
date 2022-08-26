<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    use HasFactory;

    protected $fill = [
        'id_tulisan',
        'id_pembaca',
        'isi'
    ];
}
