<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'idUser';

    protected $fillable = [
        'username',
        'email',
        'password',
        'idgroup',
    ];

    public $timestamps = false; 
}
