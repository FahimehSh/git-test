<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
        'title',
        'short_content',
        'content',
        'category_id',
        'user_id'
    ];
}
