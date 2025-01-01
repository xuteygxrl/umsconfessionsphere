<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment';

    protected $fillable = [
        'confessionId',
        'userId',
        'commentText',
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
