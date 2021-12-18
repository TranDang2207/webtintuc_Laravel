<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class loaitin extends Model
{
    use HasFactory;
    protected $table = 'loaitin';
    protected $primaryKey = 'idLT';

    /**
     * Get the user associated with the loaitin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function theloai()
    {
        return $this->hasOne(theloai::class, 'idTL', 'idTL');
    }

    /**
     * Get all of the comments for the loaitin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    /**
     * The roles that belong to the loaitin
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tins()
    {
        return $this->hasMany(tin::class,'idLT','idLT');
    }

    public $timestamps = false;
}
