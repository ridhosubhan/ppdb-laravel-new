<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class ArticlesModel extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'articles';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'category',
        'status',
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

    // public function categories()
    // {
    //     // return $this->belongsToMany(Category::class)->withPivot('category_id');
    //     return $this->belongsToMany(CategoryModel::class)->withPivot('category_id');
    // }
}
