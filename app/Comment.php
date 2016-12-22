<?php

namespace App;
use CommentController;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = [
    'subject','comment','upload_id'
  ];
  public function upload() {

    return $this->belongsTo('App\Upload', 'upload_id');

  }

}
