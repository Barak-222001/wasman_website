<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublishingItem extends Model
{
    protected $fillable = ['section','title','summary','body','category','author','event_date','cover_path','file_path','video_url','is_published','published_at'];
    protected $casts = ['event_date'=>'date','is_published'=>'boolean','published_at'=>'datetime'];
}
