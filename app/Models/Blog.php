<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
               
class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
        'cover_image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $slug = Str::slug($blog->title);
            $originalSlug = $slug;
            $count = 1;

            while (Blog::where('slug', $slug)->exists()) {
                $slug = "{$originalSlug}-{$count}";
                $count++;
            }

            $blog->slug = $slug;
        });

        static::updating(function ($blog) {
            $slug = Str::slug($blog->title);
            $originalSlug = $slug;
            $count = 1;

            while (Blog::where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
                $slug = "{$originalSlug}-{$count}";
                $count++;
            }

            $blog->slug = $slug;
        });
    }
}