<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'report'; // Table name

    protected $primaryKey = 'id'; // Primary key

    protected $fillable = [ // Fillable fields
        'confessionId',
        'userId',
        'category',
        'reasoning',
        'actionTake',
    ];

    /**
     * Relationship with Confession model.
     */
    public function confession()
    {
        return $this->belongsTo(Confession::class, 'confessionId');
    }

    /**
     * Relationship with User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
