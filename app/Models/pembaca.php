<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembaca extends Model
{
    use HasFactory;

    protected $fill = [
        'id_useraccess',
        'name',
        'email',
        'foto',
        'telepon'
    ];
}
