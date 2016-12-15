<?php

namespace App;
use ArticleController;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $fillable = [
      'nama', 'content'
  ];
}
