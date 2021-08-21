<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['imagable_type','imagable_id','size','name','path','extension'];

    //polymorphic function

    public function imagable()
    {
        return $this->morphTo();
    }
}
