<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
         'title',
        'content_type',
        'cover_video',
        'cover_image',
        'description',
        'user_id'
    ];

    
    protected $primaryKey = 'user_id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {

        return $this->belongsTo(PostCategory::class,  'category_id');
    }
}
