<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'thumbnail', 'image', 'link', 'tags', 'category'];

    protected $casts = [
        'tags' => 'array',
    ];

    protected $appends = ['image_url', 'thumbnail_url'];

    public function getThumbnailUrlAttribute()
    {
        if (!$this->thumbnail) {
            return 'https://via.placeholder.com/400x300';
        }
        if (\Illuminate\Support\Str::startsWith($this->thumbnail, ['http://', 'https://'])) {
            return $this->thumbnail;
        }
        return asset($this->thumbnail);
    }

    public function getImageUrlAttribute()
    {
        $image = $this->image ?: $this->thumbnail;
        
        if (!$image) {
            return 'https://via.placeholder.com/400x300';
        }

        if (\Illuminate\Support\Str::startsWith($image, ['http://', 'https://'])) {
            return $image;
        }
        return asset($image);
    }
}
