<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'tags',
        'link_url',
        'image_url',
    ];

    public function getPublishedStatusAttribute()
    {
        return ($this->published) ? "Published" : "Unpublished";
    }

    public function getPublishedStatusToggleAttribute()
    {
        return (!$this->published) ? "Publish" : "Unpublish";
    }

    public function getPreviewAttribute()
    {
        return Str::limit($this->content, 150, $end='...');
    }

    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    public function scopeUnpublished($query)
    {
        return $query->where('published', 0);
    }

}
