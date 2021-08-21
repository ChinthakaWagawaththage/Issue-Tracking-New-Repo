<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable =['title','body','uuid','slug'];

    //polymorphic function

    public function images()
    {
        return $this->morphMany('App\Models\Image','imagable');
    }

    //many to many relationship to categories

    public function categories()
    {
        return $this->belongsToMany(Category::class,'issue_categories','issue_id',
        'category_id');
    }

    //many to many relationship to subcategories

    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class,'issue_subcategories','issue_id',
            'subcategory_id');
    }

    //hasMany relationship with Comments

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
