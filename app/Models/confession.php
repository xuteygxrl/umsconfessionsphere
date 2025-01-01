<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confession extends Model
{
    use HasFactory;

    protected $table = 'confession'; // Specify the table name if it doesn't follow Laravel's naming convention

    protected $primaryKey = 'id';

    protected $fillable = [
        'content',
        'userId',
        'confessionCategoryId',
        'status',
        'adminId',
        'isDeleted',
        'commentSwitch',
    ];

    protected $casts = [
        'isDeleted' => 'boolean', // Cast to boolean if it represents a flag
        'commentSwitch' => 'boolean', // Cast to boolean if it represents a flag
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function category()
    {
        return $this->belongsTo(confessionCategory::class, 'confessionCategoryId','id');
    }
}
