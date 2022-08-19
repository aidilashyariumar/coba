<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    protected $fill = [
        'id',
        'id_useraccess',
        'name',
        'foto',
        'telepon'
    ];
}
