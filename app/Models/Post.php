<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'img',
        'category_id'
    ];

    protected $appends = [
        'formatted_created_at'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function technologies() {
        return $this->belongsToMany(Technology::class);
    }

    public function getFormattedCreatedAtAttribute() {
        return date('d/m/Y \a\l\l\e H:i', strtotime($this->created_at));
    }
}
