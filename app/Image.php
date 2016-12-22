<?php

namespace App;
use ImageController;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $fillable = [
      'title', 'Description', 'image',
  ];
}
