<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueSubcategory extends Model
{
    protected $fillable = ['issue_id','subcategory_id'];

    use HasFactory;
}
