<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_user',
        'image',
        'nis',
        'tingkatan',
        'jurusan',
        'kelas',
        'hp',
        'status',
    ];
}