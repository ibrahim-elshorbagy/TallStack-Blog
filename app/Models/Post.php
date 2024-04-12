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

        protected $fillable=[
        'user_id',
        'title',
        'slug',
        'imagae',
        'body',
        'published_at',
        'featured',
    ];

    use HasFactory;
    use SoftDeletes;
    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }

    public function scopeFeatured($query){
        $query->where('featured',true);
    }


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

    public function getExcerpt(){
        return Str::limit(strip_tags($this->body),50);
    }

    public function getReadingTime(){
        $mins = round(str_word_count($this->body) / 250);
        return ($mins < 1) ? 1:$mins;
    }

    public function getThumbinalImage(){
        $isUrl = str_contains($this->image,'http');
        return $isUrl ? $this->image : Storage::disk('public')->url($this->image);
    }
}
