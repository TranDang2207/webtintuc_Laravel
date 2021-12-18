<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    protected $table = 'theloai';
    protected $primaryKey = 'idTL';

    /**
     * Get all of the comments for the theloai
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function loaitin()
    {
        return $this->hasMany(loaitin::class, 'idTL', 'idTL');
    }

    /**
     * Get all of the comments for the theloai
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tin()
    {
        return $this->hasMany(tin::class, 'idTL');
    }

    public $timestamps = false;
}
