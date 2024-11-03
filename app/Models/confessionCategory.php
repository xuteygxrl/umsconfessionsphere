<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class confessionCategory extends Model
{
    use HasFactory;

    protected $table = 'confessionCategory';

    protected $fillable=[
        'categoryName'
    ];
}
