<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $table = 'blog';

    public const STATUS = [
        'PUBLISH' => 'active',
        'UNPUBLISH' => 'inactive',
    ];

    protected $fillable = [
        'title',
        'description',
        'content',
        'slug',
        'thumbnail',
        'tag',
        'status',
    ];
    /**
     * Return the created_at configuration array for this model.
     *
     * @return array
     */
    protected $casts = [
        'created_at' => 'date:d-m-Y',
        'updated_at' => 'date:d-m-Y',
        'deleted_at' => 'date:d-m-Y',
    ];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
    public function scopeSearch($query) {
        if($key = request()->search){
            $query = $query->where('title','like', '%'.$key.'%');
        }
        return $query;
    }
    public function categories(){
        return $this->belongsToMany(Category::class,'blog_category','blog_id','category_id');
    }
}
