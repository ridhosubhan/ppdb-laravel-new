<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeVisitCounterModel extends Model
{
    use HasFactory;
    protected $table = 'home_visit_counter';
    protected $primaryKey = 'id';

    protected $fillable = [
        'home_counter_visit',
    ];
}
