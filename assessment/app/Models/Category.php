<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','description'];

    //hasMany Relationship with SubCategory

    public function subCategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function issues(){
        return $this->belongsToMany(Issue::class,'issue_categories','category_id','issue_id');
    }


}
