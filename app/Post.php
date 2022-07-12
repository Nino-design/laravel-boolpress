<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];

    public static function generatePostSlugFromTitle($title) {
        $base_slug = Str::slug($title, '-');
        $slug = $base_slug; 
        $count = 1;
        $post_found = Post::where('slug', '=', $slug)->first();
        while ($post_found) {
            $slug = $base_slug . '-' . $count; 
            $post_found = Post::where('slug', '=', $slug)->first();
            $count++;
        }

        return $slug;
    }
}