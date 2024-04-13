<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

class Post extends Model
{

    use HasFactory;
    use SoftDeletes;

        protected $fillable=[
        'user_id',
        'title',
        'slug',
        'image',
        'body',
        'published_at',
        'featured',
    ];



    //============= relation ship =====================


        public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
        protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    public function likes(){
        return $this->belongsToMany(User::class,"post_like")->withTimestamps();
    }
    //============= Methods ==========================

    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }

    public function scopeFeatured($query){
        $query->where('featured',true);
    }


    //============= Blog page ==========================
        public function getExcerpt(){
        return Str::limit(strip_tags($this->body),50);
    }

    public function getReadingTime(){
        $mins = round(str_word_count($this->body) / 250);
        return ($mins < 1) ? 1:$mins;
    }







        public function scopeWithCategory($querey,string $category){
            $querey->whereHas('categories', function ($query) use($category){
                $query->where('slug', $category);
            });
        }

    public function getThumbnailUrl()
    {
        $isUrl = str_contains($this->image, 'http');

        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
    }
}
