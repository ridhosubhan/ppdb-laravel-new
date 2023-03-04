<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialsModel extends Model
{
    use HasFactory;

    protected $table = 'destinations';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'job_position',
        'workplace',
        'image',
        'content',
        'create_by',
        'update_by',
        'delete_by',
        'created_at',
        'updated_at',
    ];
}
