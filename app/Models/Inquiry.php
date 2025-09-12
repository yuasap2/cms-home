<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

     // 必要に応じて、テーブル名を明示
    protected $table = 'inquiries';

    // 複数代入を許可する属性（必要なら）
    protected $fillable = [
        'status',
        'inquiry_details',
        'remarks',
        'company',
        'member_name',
        'phone_number',
        'email',
        'date_of_birth',
        'gender',
        'job', 
        'inquiry_details',
        'status',
        'remarks',
        'postal_code',
        'prefecture',
        'city',
        'address',
        // 他にも必要なカラムがあれば追加
    ];
            // 日付として扱いたいなら（任意）
    protected $casts = [
        'date_of_birth' => 'date',  // 取得時に Carbon になります
    ];

}
