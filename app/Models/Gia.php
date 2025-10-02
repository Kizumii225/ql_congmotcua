<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gia extends Model
{
    use HasFactory;
    protected $table = '24_gia';
    protected $fillable = [
        'id', 'id_loai','gia', 
    ];
    public $timestamps = false;
}