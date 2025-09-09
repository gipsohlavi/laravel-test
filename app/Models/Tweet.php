<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    //テーブル名がクラス名のスネークケースかつ複数形でないため紐づけ
    protected $table = 'tweet';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
