<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    use HasFactory;
    // protected $table = '24_danhmuc_sanpham';
    // protected $fillable = [
    //     'id', 'loai', 'mota', 'gia', 'anhsanpham', 'id_loai', 'id_nhasanxuat',
    // ];
    // public $timestamps = true;
    protected $table = '24_loaisanpham';  

    protected $fillable = [
        'id', 'loai', 'mota', 'gia', 'anhsanpham',
    ];

    public $timestamps = true; 
    public function gia()
    {
        return $this->hasOne(Gia::class, 'id_loai', 'id'); 
    }
    public function danhmuc()
    {
        return $this->belongsTo(Danhmuc::class, 'id_loai', 'id');
    }
    public function nhasanxuat()
    {
        return $this->belongsTo(nhaSX::class, 'id_nhasanxuatd', 'id');
    }
    public function tonkho()
    {
        return $this->hasMany(Tonkho::class, 'sp_id', 'sp_id');
    }
    public function chitiethoadon()
    {
        return $this->hasMany(Chitiethoadon::class, 'sp_id', 'sp_id');
    }
}