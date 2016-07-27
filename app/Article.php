<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
      'title',
      'body',
<<<<<<< HEAD
      'small_text',
      'text',
      'slug',
      'published_at',
=======
      'slug',
>>>>>>> d8c0326e181d08607813fa36679853dc347be8cb
      'enabled',

    ];
}
