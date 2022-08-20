<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class useraccess extends Model
{
    use HasFactory;

    protected $fill = [
        'id',
        'username',
        'password',
        'tipe_user'

    ];
}
