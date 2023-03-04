<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategoryModel extends Model
{
    use HasFactory;
    protected $table = 'article_category';
    protected $primaryKey = 'id';

    protected $fillable = [
        'article_id',
        'category_id',
        'created_at',
        'updated_at',
    ];
}
