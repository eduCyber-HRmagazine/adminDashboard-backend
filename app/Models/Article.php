<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Models\ArticleCategory;
use App\Models\sourceArticle;
use App\Models\youtubeLink;
use App\Models\articleComment;
use App\Models\Tag;

class Article extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'title',
        // 'slug',
        'image',
        'content',
        'category_id',
        'user_id',
        'author_id',
        'approved',
        // no need to add type and id in fillable, fillable means the data that will be added manually, 
        //like slug is added automatically there is no need to add it into fillable, 
        //so as to morph relation is handled automatically 
        // 'articleable_type',   
        // 'articleable_id',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function articleable()
    {
        return $this->morphto();
    }

    public function articleCategory()
    {
        return $this->belongsTo(ArticleCategory::class);
    }

    public function sourceArticle()
    {
        return $this->hasMany(SourceArticle::class);
    }

    public function youtubeLink()
    {
        return $this->hasMany(YoutubeLink::class);
    }

    public function articleComment()
    {
        return $this->hasMany(articleComment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
