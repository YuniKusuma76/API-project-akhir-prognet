<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggotakk extends Model
{
    use HasFactory;
    protected $fillable = [
        'kk_id',
        'penduduk_id',
        'hubungankk_id',
        'statusaktif',
        'user_id',
        'created_at',
        'updated_at',
    ];
}
