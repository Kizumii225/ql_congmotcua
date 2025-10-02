<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    use HasFactory;
    protected $table = '24_loaisanpham';
    protected $fillable = [
        'id', 'loai', 
    ];
    public $timestamps = false;
}