<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class HomepageSpotlight extends Model
{
    protected $fillable = ['heading', 'intro', 'title', 'authors', 'description', 'flyer_path', 'article_path', 'is_featured', 'published_at'];
    protected $casts = ['is_featured' => 'boolean', 'published_at' => 'datetime'];
}
