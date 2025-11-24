<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'link', 'tags'];

    protected $casts = [
        'tags' => 'array',
    ];

    public function getImageUrlAttribute()
    {
        if (\Illuminate\Support\Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return asset($this->image);
    }
}
