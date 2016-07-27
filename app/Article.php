<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
      'title',
      'body',
      'small_text',
      'text',
      'slug',
      'published_at',
      'enabled',

    ];
}
