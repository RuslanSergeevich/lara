<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPagesModel extends Model

{
  protected $table = 'pages';

  protected $fillable = [
    'title',
    'description',
    'keywords',
    'name',
    'slug',
    'body',
    'markerPosition',
    'mapZoom',
    'mapCenter',
    'published_at',
    'enabled',
  ];
}
