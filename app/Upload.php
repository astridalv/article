<?php

namespace App;
use ImageController;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
  protected $fillable = [
      'title', 'Description', 'image',
  ];
  public function comments() {
     return $this->hasMany('App\Comment', 'upload_id');
   }

}
