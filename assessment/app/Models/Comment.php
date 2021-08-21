<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['issue_id','body'];

    //polymorphic function

    public function images()
    {
        return $this->morphMany('App\Models\Image','imagable');
    }

    //belongsTo relation with Issue

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }
}
