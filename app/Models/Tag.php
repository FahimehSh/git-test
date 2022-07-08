<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany(Post::class)->withPivot('create_date', 'create_time');
    }
}
