<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class CategoryModel extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'create_by',
        'update_by',
        'delete_by',
        'created_at',
        'updated_at',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // public function articles()
    // {
    //     return $this->belongsToMany(ArticlesModel::class);
    //     // return $this->belongsToMany(Article::class);
    // }
}
