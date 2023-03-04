<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsModel extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';

    protected $fillable = [
        'no_registrasi',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'slug',
        'pasfoto',
        'kk',
        'ktp',
        'gelombang',
        'prodi',
        'transkrip',
        'ijazah',
        'buktipembayaran',
        'email',
        'status',
        'create_by',
        'update_by',
        'delete_by',
        'created_at',
        'updated_at',
    ];
}
