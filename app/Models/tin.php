<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tin extends Model
{
    protected $table = "tin";
    protected $primaryKey = "idTin";
    protected $fillable = [
        'TieuDe',
        'TomTat',
        'Content',
        'urlHinh',
        'idLT',
        'AnHien',
        'NoiBat',
        'lang',
        'tags'
    ];

    /**
     * Get the user associated with the tin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function loaitin()
    {
        return $this->hasOne(loaitin::class, 'idLT', 'idLT');
    }

    public function theloai()
    {
        return $this->hasOne(theloai::class, 'idTL', 'idTL');
    }

    public function scopeSearch($query){
        if($key = request()->search){
            $query = $query->where('TieuDe','like','%'.$key.'%')->orwhere('TomTat','like','%'.$key.'%')->orwhere('Content','like','%'.$key.'%');
        }
        return $query;
    }

    //user
    
    public function getNewsTuTheLoai($idTL){
        $r = DB::table('tin')->select('TieuDe','urlHinh','Ngay','tin.lang','loaitin.Ten','SoLanXem','NoiBat','tin.AnHien','theloai.TenTL')
        ->join('loaitin','loaitin.idLT','tin.idLT')
        ->join('theloai','theloai.idTL','loaitin.idTL')->where('tin.AnHien',1)->where('NoiBat',1)
        ->where('urlHinh','!=','')->where('loaitin.idTL',$idTL)->orderby('Ngay','desc')->limit(5)->get();
        return $r;
    }

    public function comments()
    {
        return $this->hasMany(comment::class, 'idTin');
    }

    public $timestamps = false;
}
