<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = 'ykien';
    protected $primaryKey = 'idYKien';
    protected $fillable = [
        'idTin',
        'NoiDung',
        'idUser',
    ];

    /**
     * Get the user associated with the comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(UsersModel::class, 'idUser', 'idUser');
    }

    /**
     * Get the user associated with the comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tin()
    {
        return $this->hasOne(tin::class, 'idTin', 'idTin');
    }

    public $timestamps = false;
}
