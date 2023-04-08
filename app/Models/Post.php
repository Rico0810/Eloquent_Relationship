<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'excerpt', 'body'];
}
