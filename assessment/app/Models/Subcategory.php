<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','name','description'];

    //belongsTo relationship with Category

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function issues(){
        return $this->belongsToMany(Issue::class,'issue_categories','subcategory_id','issue_id');
    }
}
