<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Account24 extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'account24s'; // 👈 thêm dòng này để Laravel hiểu đúng tên bảng

    /**
     * Các cột cho phép gán hàng loạt (mass assignable)
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'img_gg',
        'admin',
        'status',
        'cccd_bo',
    ];

    /**
     * Các cột sẽ bị ẩn khi chuyển sang JSON / mảng
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Kiểu dữ liệu đặc biệt (casting)
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
